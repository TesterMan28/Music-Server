require('./bootstrap');
import { gsap } from "gsap";
//import rellax from "rellax";

//import lax from 'lax.js';

// import { ScrollMagic }
//import { ScrollMagic } from "../../node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic";
//import * as ScrollMagic from "../../node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic";
//import ScrollMagic from 'scrollmagic';
//import { rellax } from "rellax";
//import { scrollmagic } from "scrollmagic";






/* TODO: Optimized version
var j = 1;
while (j <= document.querySelectorAll("feature").length) {
    gsap.fromTo("#slidemein" + j, { x: "-=3000" }, 
    {
        x: "0",
        duration: 2,
        stagger: {
            amount: 2,
            from: "center",
            grid: "auto"
        }
    })
}
*/







//Working but code is abit long
gsap.fromTo("#slidemein3", { x: "-=2000" },
{
    x: "0",
    visibility: "visible",
    duration: 1,
    stagger: {
        amount: 2,
        from: "center",
        grid: "auto",
    },
    onComplete: function() {
        console.log("First one");
        gsap.fromTo("#slidemein2", { x: "-=2000" }, 
        {
            x: "0",
            visibility: "visible",
            duration: 1,
            stagger: {
                amount: 2,
                from: "center",
                grid: "auto",
            },
            onComplete: function() {
                console.log("Second one");
                gsap.fromTo("#slidemein", { x: "-=2000" },
                {
                    x: "0",
                    visibility: "visible",
                    duration: 1,
                    stagger: {
                        amount: 2,
                        from: "center",
                        grid: "auto",
                    }
                })
            }
        })
    }
});

// Code for animating HR tag opening
gsap.fromTo(".about-seperate", { width: "0%" },
{
    width: "25%",
    duration: 1,
    onComplete: function() {
        console.log("Displaying buttons");
        gsap.fromTo(".services-buttons", { opacity: 0 },
        {
            opacity: 1,
            duration: 2
        })
    }
});

//var controller = new ScrollMagic.Controller();
/*
var rellax = new Rellax('.rellax', {
    speed: -2,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
});
*/

// Using Rellax
/*
var rellax = new Rellax('.rellax', {
    speed: -2,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
});
*/