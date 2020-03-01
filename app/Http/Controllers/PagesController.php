<?php

namespace App\Http\Controllers;

require __DIR__ . '/../../../vendor/autoload.php';

use Auth;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;

use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;

use Pbmedia\LaravelFFMpeg\FFMpegServiceProvider;
//use Pbmedia\LaravelFFMpeg\FFMpeg;
use Pbmedia\LaravelFFMpeg\FFMpegFacade;
use FFMpeg;
//use FFMpeg\Media\Video;

// Serving a static file, use BinaryFileResponse
use Symfony\Component\HttpFoundation\BinaryFileResponse;


/*
use FFMpeg\FFMpeg as BaseFFMpeg;

use FFMpeg\Filters\Audio\SimpleFilter;
use FFMpeg\Format\AudioInterface;
use FFMpeg\Media\Audio;
use Pbmedia\LaravelFFMpeg\HLSPlaylistExporter;
use Pbmedia\LaravelFFMpeg\Media;
use Pbmedia\LaravelFFMpeg\SegmentedExporter;
*/

class PagesController extends Controller
{
    public function index() {
    	$title = 'Welcome to Laravel';
    	return view('pages.index') -> with('title', $title);
    }

    public function about() {
    	$title = 'About Us';
        //return view('pages.about') -> with('title', $title);
        $storage = storage_path();
        $data = [
            'title' => $title,
            'storage' => $storage,
        ];
        return view('pages.about')->with($data);
    }

    public function services() {
        /*
    	$data = array(
    		'title' => 'Services',
    		'services' => ['Web Design', 'Programming', 'SEO']
    	);
        return view('pages.services') -> with($data);
        */
        $title = 'Services';
        return view('pages.services')->with('title', $title);
    }

    // Function to convert youtube video to .mp3 file
    public function ytdownload($url) {
        //$path = dirname($_SERVER['DOCUMENT_ROOT'], 1);
        //echo $path;
        //echo $_SERVER['DOCUMENT_ROOT'] . '/..';
        //return view('pages.download');
        $path = dirname($_SERVER['DOCUMENT_ROOT'], 1);

        $dl = new YoutubeDl([
            'continue' => true,
            'extract-audio' => true,
            'audio-format' => 'mp3',
            'audio-quality' => 0,
            'output' => '%(title)s.%(ext)s',
            'ffmpeg-location' => $path . '\ytdownload\ffmpeg-library\bin\ffmpeg.exe',
        ]);
        
        // Set storage path
        $base_storage_path = storage_path();
        $storage_path = storage_path() . '/songs';
        echo $storage_path;


        $dl->setDownloadPath($storage_path);
        // Enable debugging
        $dl->debug(function ($type, $buffer) {
            if (\Symfony\Component\Process\Process::ERR === $type) {
                echo 'ERR > ' . $buffer;
            } else {
                echo 'OUT > ' . $buffer;
            }
        });

        try {
            // Dynamically get the youtube download link from user request
            $video = $dl->download($url);

            // $video = $dl->download('https://www.youtube.com/watch?v=Wy9q22isx3U');
            //echo $video->getTitle(); 
        } catch (NotFoundException $e) {
            echo 'Video not found';
        } catch (PrivateVideoException $e) {
            echo 'Video is private';
        } catch (CopyrightException $e) {
            echo 'Video has been copyrighted';
        } catch (\Exception $e) {
            echo 'General error';
        }
        
    }

    // Convert .mp3 file to .aac file. For testing purposes
    public function convertaudio() {
        if (Auth::user()) {
            $song_path = storage_path() . '\songs';
            $storage_location = storage_path() . '\converted_songs';
            
            //$root = dirname($_SERVER['DOCUMENT_ROOT'], 1);
            //$the_path = $root . 'C:\wamp64\www\blog\ffmpeg-library\bin\ffmpeg'
            //echo $root;
            echo 'converting\n ';
            
            //echo storage_path('songs');
            
            $the_env_path = env('FFMPEG_BINARIES', 'default');
            echo 'The path is ' . $the_env_path;

            /*
            FFMpeg::fromDisk('videos')
            ->open('Vue JS Crash Course.mp3')
            ->export()
            ->toDisk('public')
            ->inFormat(new \FFMpeg\Format\Audio\Flac)
            ->save('yesterday.flac');
            */

            /* Code used to try to convert .mp3 to .m3u8 for HLS
            $lowBitrate = (new \FFMpeg\Format\Video\X264)->setKiloBitrate(250);
            $midBitrate = (new \FFMpeg\Format\Video\X264)->setKiloBitrate(500);
            $highBitrate = (new \FFMpeg\Format\Video\X264)->setKiloBitrate(1000);

            FFMpeg::fromDisk('videos')
                ->open('Vue JS Crash Course.mp3')
                ->exportForHLS()
                ->addFormat($lowBitrate)
                ->addFormat($midBitrate)
                ->addFormat($highBitrate)
                ->save('adaptive_stream.m3u8');
            
            */
            echo "converted\n";
            
            $song_name = "Vue JS Crash Course.mp3";

            $path = storage_path() . '/' . "songs" . '/' . $song_name;
            $response = new BinaryFileResponse($path);
            BinaryFileResponse::trustXSendfileTypeHeader();

            return $response;
            echo 'Final line';
        } else {
            echo 'Not allowed';
        }
        
    }
    // TODO: Serve mp3 to android. https://stackoverflow.com/questions/37548096/serve-mp3-stream-for-android-with-laravel
}
