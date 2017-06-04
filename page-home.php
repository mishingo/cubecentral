<?php
/*
    Template Name: Home Page
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
?>


<div id="main">
     
     <div id='experience'>
        <div class="row cube-parent-container center-align">
        <h1 class="cube-container-text">ALL HAIL CUBE!</h1>
           <div class="cube-container">
             <div class="cube">
               <figure class="front"></figure>
               <figure class="back"></figure>
               <figure class="right"></figure>
               <figure class="left"></figure>
               <figure class="top"></figure>
               <figure class="bottom"></figure>
             </div>
           </div>
        </div>
     </div>
     
   </div>

   <div id="lock"></div>

 



   <script id="shader-vertex-terrain-perlin" type="x-shader/x-vertex">


       vec3 mod289(vec3 x)
       {
         return x - floor(x * (1.0 / 289.0)) * 289.0;
       }

       vec4 mod289(vec4 x)
       {
         return x - floor(x * (1.0 / 289.0)) * 289.0;
       }

       vec4 permute(vec4 x)
       {
         return mod289(((x*34.0)+1.0)*x);
       }

       vec4 taylorInvSqrt(vec4 r)
       {
         return 1.79284291400159 - 0.85373472095314 * r;
       }

       vec3 fade(vec3 t) {
         return t*t*t*(t*(t*6.0-15.0)+10.0);
       }


       float cnoise(vec3 P)
       {
         vec3 Pi0 = floor(P);
         vec3 Pi1 = Pi0 + vec3(1.0);
         Pi0 = mod289(Pi0);
         Pi1 = mod289(Pi1);
         vec3 Pf0 = fract(P);
         vec3 Pf1 = Pf0 - vec3(1.0);
         vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
         vec4 iy = vec4(Pi0.yy, Pi1.yy);
         vec4 iz0 = Pi0.zzzz;
         vec4 iz1 = Pi1.zzzz;

         vec4 ixy = permute(permute(ix) + iy);
         vec4 ixy0 = permute(ixy + iz0);
         vec4 ixy1 = permute(ixy + iz1);

         vec4 gx0 = ixy0 * (1.0 / 7.0);
         vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
         gx0 = fract(gx0);
         vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
         vec4 sz0 = step(gz0, vec4(0.0));
         gx0 -= sz0 * (step(0.0, gx0) - 0.5);
         gy0 -= sz0 * (step(0.0, gy0) - 0.5);

         vec4 gx1 = ixy1 * (1.0 / 7.0);
         vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
         gx1 = fract(gx1);
         vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
         vec4 sz1 = step(gz1, vec4(0.0));
         gx1 -= sz1 * (step(0.0, gx1) - 0.5);
         gy1 -= sz1 * (step(0.0, gy1) - 0.5);

         vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
         vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
         vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
         vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
         vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
         vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
         vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
         vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);

         vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
         g000 *= norm0.x;
         g010 *= norm0.y;
         g100 *= norm0.z;
         g110 *= norm0.w;
         vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
         g001 *= norm1.x;
         g011 *= norm1.y;
         g101 *= norm1.z;
         g111 *= norm1.w;

         float n000 = dot(g000, Pf0);
         float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
         float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
         float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
         float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
         float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
         float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
         float n111 = dot(g111, Pf1);

         vec3 fade_xyz = fade(Pf0);
         vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
         vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
         float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
         return 2.2 * n_xyz;
       }


       float pnoise(vec3 P, vec3 rep)
       {
         vec3 Pi0 = mod(floor(P), rep);
         vec3 Pi1 = mod(Pi0 + vec3(1.0), rep);
         Pi0 = mod289(Pi0);
         Pi1 = mod289(Pi1);
         vec3 Pf0 = fract(P);
         vec3 Pf1 = Pf0 - vec3(1.0);
         vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
         vec4 iy = vec4(Pi0.yy, Pi1.yy);
         vec4 iz0 = Pi0.zzzz;
         vec4 iz1 = Pi1.zzzz;

         vec4 ixy = permute(permute(ix) + iy);
         vec4 ixy0 = permute(ixy + iz0);
         vec4 ixy1 = permute(ixy + iz1);

         vec4 gx0 = ixy0 * (1.0 / 7.0);
         vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
         gx0 = fract(gx0);
         vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
         vec4 sz0 = step(gz0, vec4(0.0));
         gx0 -= sz0 * (step(0.0, gx0) - 0.5);
         gy0 -= sz0 * (step(0.0, gy0) - 0.5);

         vec4 gx1 = ixy1 * (1.0 / 7.0);
         vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
         gx1 = fract(gx1);
         vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
         vec4 sz1 = step(gz1, vec4(0.0));
         gx1 -= sz1 * (step(0.0, gx1) - 0.5);
         gy1 -= sz1 * (step(0.0, gy1) - 0.5);

         vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
         vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
         vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
         vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
         vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
         vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
         vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
         vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);

         vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
         g000 *= norm0.x;
         g010 *= norm0.y;
         g100 *= norm0.z;
         g110 *= norm0.w;
         vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
         g001 *= norm1.x;
         g011 *= norm1.y;
         g101 *= norm1.z;
         g111 *= norm1.w;

         float n000 = dot(g000, Pf0);
         float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
         float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
         float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
         float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
         float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
         float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
         float n111 = dot(g111, Pf1);

         vec3 fade_xyz = fade(Pf0);
         vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
         vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
         float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
         return 2.2 * n_xyz;
       }

       float rand(vec2 n)
       {
         return 0.5 + 0.5 *
            fract(sin(dot(n.xy, vec2(12.9898, 78.233)))* 43758.5453);
       }

       varying vec2  v_uv;
       varying vec3  v_line_color;


       uniform float time;
       uniform float speed;
       uniform float elevation;
       uniform float noise_range;
       uniform float perlin_passes;
       uniform vec3  line_color;
       uniform float sombrero_amplitude;
       uniform float sombrero_frequency;
       varying float z;

       #define M_PI 3.1415926535897932384626433832795

       void main()
       {
           gl_PointSize = 1.;
           v_uv          = uv;
           v_line_color   = line_color;

           // First perlin passes

           float displacement  = pnoise( .4 * position + vec3( 0, speed * time, 0 ), vec3( 100.0 ) ) * 1. * noise_range;

           if( perlin_passes > 2.0 ){

             displacement       += pnoise( 2. * position + vec3( 0, speed * time * 5., 0 ), vec3( 100. ) ) * .3 * noise_range;
             displacement       += pnoise( 8. * position + vec3( 0, speed * time * 20., 0 ), vec3( 100. ) ) * .1 * noise_range;

           }
           else if(perlin_passes > 1.0){

             displacement       += pnoise( 8. * position + vec3( 0, speed * time * 20., 0 ), vec3( 100. ) ) * .1 * noise_range;
           }





           // Sinus
           displacement = displacement + (sin(position.x / 2. - M_PI / 2.)) * elevation;

           vec3 newPosition = vec3(position.x,position.y,displacement);
           gl_Position      = projectionMatrix * modelViewMatrix * vec4( newPosition, 1. );

           z = newPosition.z;
       }

   </script>


   <script id="shader-vertex-terrain-perlinsombrero" type="x-shader/x-vertex">


       vec3 mod289(vec3 x)
       {
         return x - floor(x * (1.0 / 289.0)) * 289.0;
       }

       vec4 mod289(vec4 x)
       {
         return x - floor(x * (1.0 / 289.0)) * 289.0;
       }

       vec4 permute(vec4 x)
       {
         return mod289(((x*34.0)+1.0)*x);
       }

       vec4 taylorInvSqrt(vec4 r)
       {
         return 1.79284291400159 - 0.85373472095314 * r;
       }

       vec3 fade(vec3 t) {
         return t*t*t*(t*(t*6.0-15.0)+10.0);
       }


       float cnoise(vec3 P)
       {
         vec3 Pi0 = floor(P);
         vec3 Pi1 = Pi0 + vec3(1.0);
         Pi0 = mod289(Pi0);
         Pi1 = mod289(Pi1);
         vec3 Pf0 = fract(P);
         vec3 Pf1 = Pf0 - vec3(1.0);
         vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
         vec4 iy = vec4(Pi0.yy, Pi1.yy);
         vec4 iz0 = Pi0.zzzz;
         vec4 iz1 = Pi1.zzzz;

         vec4 ixy = permute(permute(ix) + iy);
         vec4 ixy0 = permute(ixy + iz0);
         vec4 ixy1 = permute(ixy + iz1);

         vec4 gx0 = ixy0 * (1.0 / 7.0);
         vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
         gx0 = fract(gx0);
         vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
         vec4 sz0 = step(gz0, vec4(0.0));
         gx0 -= sz0 * (step(0.0, gx0) - 0.5);
         gy0 -= sz0 * (step(0.0, gy0) - 0.5);

         vec4 gx1 = ixy1 * (1.0 / 7.0);
         vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
         gx1 = fract(gx1);
         vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
         vec4 sz1 = step(gz1, vec4(0.0));
         gx1 -= sz1 * (step(0.0, gx1) - 0.5);
         gy1 -= sz1 * (step(0.0, gy1) - 0.5);

         vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
         vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
         vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
         vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
         vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
         vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
         vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
         vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);

         vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
         g000 *= norm0.x;
         g010 *= norm0.y;
         g100 *= norm0.z;
         g110 *= norm0.w;
         vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
         g001 *= norm1.x;
         g011 *= norm1.y;
         g101 *= norm1.z;
         g111 *= norm1.w;

         float n000 = dot(g000, Pf0);
         float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
         float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
         float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
         float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
         float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
         float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
         float n111 = dot(g111, Pf1);

         vec3 fade_xyz = fade(Pf0);
         vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
         vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
         float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
         return 2.2 * n_xyz;
       }

       float pnoise(vec3 P, vec3 rep)
       {
         vec3 Pi0 = mod(floor(P), rep);
         vec3 Pi1 = mod(Pi0 + vec3(1.0), rep);
         Pi0 = mod289(Pi0);
         Pi1 = mod289(Pi1);
         vec3 Pf0 = fract(P);
         vec3 Pf1 = Pf0 - vec3(1.0);
         vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
         vec4 iy = vec4(Pi0.yy, Pi1.yy);
         vec4 iz0 = Pi0.zzzz;
         vec4 iz1 = Pi1.zzzz;

         vec4 ixy = permute(permute(ix) + iy);
         vec4 ixy0 = permute(ixy + iz0);
         vec4 ixy1 = permute(ixy + iz1);

         vec4 gx0 = ixy0 * (1.0 / 7.0);
         vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
         gx0 = fract(gx0);
         vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
         vec4 sz0 = step(gz0, vec4(0.0));
         gx0 -= sz0 * (step(0.0, gx0) - 0.5);
         gy0 -= sz0 * (step(0.0, gy0) - 0.5);

         vec4 gx1 = ixy1 * (1.0 / 7.0);
         vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
         gx1 = fract(gx1);
         vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
         vec4 sz1 = step(gz1, vec4(0.0));
         gx1 -= sz1 * (step(0.0, gx1) - 0.5);
         gy1 -= sz1 * (step(0.0, gy1) - 0.5);

         vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
         vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
         vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
         vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
         vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
         vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
         vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
         vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);

         vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
         g000 *= norm0.x;
         g010 *= norm0.y;
         g100 *= norm0.z;
         g110 *= norm0.w;
         vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
         g001 *= norm1.x;
         g011 *= norm1.y;
         g101 *= norm1.z;
         g111 *= norm1.w;

         float n000 = dot(g000, Pf0);
         float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
         float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
         float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
         float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
         float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
         float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
         float n111 = dot(g111, Pf1);

         vec3 fade_xyz = fade(Pf0);
         vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
         vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
         float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
         return 2.2 * n_xyz;
       }

       float rand(vec2 n)
       {
         return 0.5 + 0.5 *
            fract(sin(dot(n.xy, vec2(12.9898, 78.233)))* 43758.5453);
       }

       varying vec2  v_uv;
       varying vec3  v_line_color;


       uniform float time;
       uniform float speed;
       uniform float elevation;
       uniform float noise_range;
       uniform float perlin_passes;
       uniform float sombrero_amplitude;
       uniform float sombrero_frequency;
       uniform vec3  line_color;
       varying float z;

       #define M_PI 3.1415926535897932384626433832795

       void main()
       {
           gl_PointSize = 1.;
           v_uv          = uv;
           v_line_color   = line_color;

           // First perlin passes

           float displacement  = pnoise( .4 * position + vec3( 0, speed * time, 0 ), vec3( 100.0 ) ) * 1. * noise_range;

           if( perlin_passes > 2.0 ){

             displacement       += pnoise( 2. * position + vec3( 0, speed * time * 5., 0 ), vec3( 100. ) ) * .3 * noise_range;
             displacement       += pnoise( 8. * position + vec3( 0, speed * time * 20., 0 ), vec3( 100. ) ) * .1 * noise_range;

           }
           else if(perlin_passes > 1.0){

             displacement       += pnoise( 8. * position + vec3( 0, speed * time * 20., 0 ), vec3( 100. ) ) * .1 * noise_range;
           }


           float distance = sqrt(((uv.x-0.5) * (uv.x-0.5)) + ((uv.y-0.5) * (uv.y-0.5)));
           float z = (sombrero_amplitude * sin(((time * 0.5 * speed) - (distance * sombrero_frequency)) * M_PI));





           // Sinus
           displacement = displacement + (sin(position.x / 2. - M_PI / 2.)) * elevation;

           vec3 newPosition = vec3(position.x,position.y,displacement + z);
           gl_Position      = projectionMatrix * modelViewMatrix * vec4( newPosition, 1. );

           z = newPosition.z;
       }

   </script>

   <script id="shader-fragment-terrain" type="x-shader/x-fragment">

           varying vec2 v_uv;
           varying vec3 v_line_color;


           varying float z;

           #define M_PI 3.1415926535897932384626433832795

           void main()
           {
               vec4 temp;
              
               float alpha = sin(v_uv.y * M_PI) / 4.;
               temp = vec4(v_line_color, alpha);
               


               gl_FragColor = temp;
           }

   </script>

    <script id="shader-vertex-terrain-sombrero" type="x-shader/x-vertex">

       varying vec2  v_uv;
       varying vec3  v_line_color;

       uniform float time;
       uniform float speed;
       uniform float elevation;
       uniform float noise_range;
       uniform float perlin_passes;
       uniform float sombrero_amplitude;
       uniform float sombrero_frequency;
       uniform vec3  line_color;
       varying float z;


       #define M_PI 3.1415926535897932384626433832795

       void main()
       {
           gl_PointSize = 1.;
           v_uv          = uv;
           v_line_color   = line_color;

           float distance = sqrt(((uv.x-0.5) * (uv.x-0.5)) + ((uv.y-0.5) * (uv.y-0.5)));
           float z = (sombrero_amplitude * sin(((time * 0.5 * speed) - (distance * sombrero_frequency)) * M_PI));

           vec3 newPosition = vec3(position.x,position.y,z);
           gl_Position      = projectionMatrix * modelViewMatrix * vec4( newPosition, 1. );

           z = newPosition.z;
       }

   </script>
 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r69/three.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5/dat.gui.js"></script>
 
 <div id='experience'></div>



<?php get_template_part('inc/navbar','page'); ?>

<div id="home-page" class="row black">
   <div class="container">
      <div class="row">
         <div class="row white-text pt-m--s">
            <h2><span class="deep-purple accent-3 pl-s--s pr-s--s">Events</span></h2>
         </div>
         <?php get_template_part('inc/home-left-side','page'); ?>
      </div>
      <div class="row white-text pt-m--s">
         <h2><span class="deep-purple accent-3 pl-s--s pr-s--s">Featured</span></h2>
      </div>
      <div class="row white-text pb-l--m">
         <?php
            $posts = get_posts(array(
               'posts_per_page'	=> 2,
               'post_type'			=> 'post',
               'meta_key'		=> 'featured_post',
               'meta_value'	=> True
            ));

         if( $posts ): ?>
         <?php
            $heroids = array();
            foreach( $posts as $post ):
               setup_postdata( $post );

               $heroid = get_the_id();
               array_push($heroids, $heroid);
         ?>


               <div class="col s12 m12 l6  pl-m--m pl-s--s  pr-m--m pr-s--s  mt-m--s mt-f--m">
                  <div class="row" style="border-left:8px solid #651fff;">
                     <?php
                        $author_id=$post->post_author;
                     ?> 
                        <div class="row grey darken-4">
                           <div class="col s12"  >
                              <?php $value = get_field( "youtube" );
                                 if( $value ) {
                                    ?>
                                    <a href="<?php the_permalink(); ?>">
                                       <div class="video-container">
                                          <?php echo $value; ?>
                                       </div>
                                    </a>
                                    <?php
                                 } else {
                                    $main_image = get_field( "main_image" );
                                    ?>
                                    <a href="<?php the_permalink(); ?>" style="height:350px;">
                                       <div class="" style="height:350px;width:100%;background-size:cover;background-position:center center;background-image:url(<?php echo $main_image;?>);position:relative;">
                                          <div class="col s12 m8 white-text pa-s--s" style="position:absolute;bottom:0;">
                                             <div class="h3 white-text tw-light" style="font-size:3em;" href="<?php the_permalink(); ?>">
                                                <span class="green pl-s--s pr-s--s"><?php the_title(); ?></span>
                                             </div>
                                             <p class="mt-s--s tw-light black pl-s--s pr-s--s"><?php the_field('byline');?></p>
                                          </div>
                                       </div>
                                    </a>
                                    <?php
                                 }
                              ?>

                           </div>
                        </div>
                     
                     
                  </div>
               </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
         <?php endif; ?>
      </div>
   </div>
   
</div>

<div class="row grey darken-4 pt-s--s">
   <div class="container ">
      <div class="row">
         <div class="col s12 m4  pr-m--m">
            <div class="row white-text pt-m--s">
               <h2><span class="deep-purple accent-3 pl-s--s pr-s--s">Sponsored</span></h2>
            </div>
            <?php get_template_part('inc/ads','page'); ?>
         </div>
         <div class="col m8 mt-m--s mt-f--m">

            <div class="row">

               <?php
                  $posts = get_posts(array(
                     'posts_per_page'	=> 22,
                     'post_type'			=> 'post',
                     'category__in'    => array(1,2),
                  ));

               if( $posts ): ?>
               <?php
                  foreach( $posts as $post ):
                     setup_postdata( $post );
               ?>

               <?php

                  if(!in_array(get_the_id(), $heroids)){
                     $fp = get_field( "featured_post" );
                     if($fp == 1){
                     ?>
                        <div class="row black  pa-s--s white-text mt-m--s">
                           <?php
                              $author_id=$post->post_author;
                           ?>

                              <div class="row">
                                 <div class="col s3 pa-s--s">
                                    <a  href="<?php the_permalink(); ?>">
                                        <div class="post_thumb--a" style="background-image:url(<?php the_field('main_image');?>);">
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s9 pa-s--s">
                                    <div class="row">
                                       <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                                       </div>
                                       <div class="white-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></div>
                                       <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes </p>
                                    </div>
                                    <h3><a class="green-text text-hacker tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="black-text no-fluff"><?php the_excerpt(); ?> </p>
                                 </div>
                              </div>
                           </div>


                     <?php
                     } else {
                     ?>
                        <div class="row black  white-text mt-m--s">
                           <?php
                              $author_id=$post->post_author;
                           ?>
                              <div class="row pa-s--s">
                                 <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                                 </div>
                                 <div class="white-text  tw-ultrabold"><?php echo get_the_author_meta( 'nicename' ); ?></div>
                                 <p class="no-fluff white-text"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes  </p>
                              </div>
                              <div class="row">
                                 <a  href="<?php the_permalink(); ?>">
                                    <div class="post_thumb--b" style="background-image:url(<?php the_field('main_image');?>);">
                                    </div>
                                 </a>
                              </div>
                              <div class="row pa-s--s pl-m--s pr-m--s">
                                    <h3><a class="green-text tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <span class="white-text no-fluff"><?php the_excerpt(); ?> </span>
                              </div>
                        </div>
                     <?php
                     }

                  }
               ?>
               <?php endforeach; ?>
               <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            </div>
            <a href="/archives" class="btn-large right deep-orange white-text mt-m--s mb-m--s">more</a>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>
