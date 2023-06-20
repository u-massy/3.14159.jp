<?php
?>

<html>
<head>
    <script>
        // drop rain animation function
        const dropRainAnim = (option) => {
            // default option
            let default_option = {
                target_element: 'body', // taget HTML element
                where_to_insert: '', // Insert after the specified element in target_element. If unspecified, insert at the end of the target_element. ('img' 'p' '#id' etc)
                rain_amount: 5, // Amount of rain (min 1 max 10)
                rain_speed: 5, // Speed of rain (min 1 max 10)
                rain_color: '#FFF', // Color of rain (hex, rgba, name)
                rain_width: 1, // Width of rain
                rain_height: 5, // Length of rain
                rain_angle: 15, // Angle of rain (min -90 max 90)
                bg_shade: '#000', // Background shade (hex, rgba, name)
                bg_darkness: 5, // Adjust background brightness (min 0.0 max 10.0)
                splat: false, // Rain splat
                lightning: false, // Lightning
                lightning_color: '#FFF', // Color of lightning
                animation_time: 60 // Animation time (s)
            };

            // merge option
            let op = Object.assign(default_option, option);

            // whether the target element exists
            if (!document.querySelector(op.target_element)) {
                console.log('no target element.');
                return;
            }

            // target element
            let target_element = document.querySelector(op.target_element);
            target_element.style.position = 'relative';
            target_element.style.overflow = 'hidden';

            // Insert after the specified element
            let insert_after_element = '';
            if (op.where_to_insert != '') {
                insert_after_element = target_element.querySelector(op.where_to_insert);
            }

            // main container
            let container = document.createElement('div');
            if (!insert_after_element) {
                target_element.appendChild(container);
            } else {
                insert_after_element.after(container);
            }
            container.style.position = 'absolute';
            container.style.top = 0;
            container.style.left = 0;
            container.style.width = '100%';
            container.style.height = '100%';
            container.style.overflow = 'hidden';

            // bg
            let container_bg = document.createElement('div');
            container.appendChild(container_bg);
            container_bg.style.position = 'absolute';
            container_bg.style.width = '100%';
            container_bg.style.height = '100%';
            container_bg.style.backgroundColor = op.bg_shade;
            container_bg.style.opacity = op.bg_darkness / 10;

            // rain container
            let rain_container = document.createElement('div');
            container.appendChild(rain_container);
            rain_container.style.position = 'absolute';
            rain_container.style.width = '100%';
            rain_container.style.height = '100%';
            rain_container.style.transform = `rotate(${op.rain_angle}deg)`;

            // rain clone
            let rain = document.createElement('div');
            rain.style.position = 'absolute';
            rain.style.top = '-100%';
            rain.style.left = 0;
            rain.style.width = `${op.rain_width}px`;
            rain.style.height = `${op.rain_height * 20}px`;
            rain.style.opacity = 0.7;
            rain.style.backgroundColor = op.rain_color;

            // splat container
            let splat_container = document.createElement('div');
            container.appendChild(splat_container);
            splat_container.style.position = 'absolute';
            splat_container.style.width = '100%';
            splat_container.style.height = '100%';

            // splat clone
            let splat = document.createElement('div');
            splat.style.position = 'absolute';
            splat.style.borderRadius = '50%';
            splat.style.backgroundColor = op.rain_color;

            let count = 0;
            op.animation_time *= 60;
            const update = () => {
                let rand1 = Math.floor(Math.random() * 100);
                let rand2 = Math.floor(Math.random() * 100);

                if (count % (11 - op.rain_amount) == 0) {
                    // rain
                    let rain_clone = rain.cloneNode();
                    rain_clone.style.left = `${rand1}%`;
                    rain_container.appendChild(rain_clone);

                    let rain_anim = rain_clone.animate(
                        [{ top: `-${op.rain_height * 50}px` }, { top: `${rand2 * 2}%` }],
                        {
                            duration: 1400 / op.rain_speed,
                            iterations: 2
                        }
                    );

                    rain_anim.onfinish = (event) => {
                        rain_clone.remove();
                    };

                    // splat
                    if (op.splat == true) {
                        let splat_clone = splat.cloneNode();
                        splat_clone.style.top = `${rand2 + 0}%`;
                        splat_clone.style.left = `${rand1}%`;
                        splat_clone.style.width = `${rand2 + 70}px`;
                        splat_clone.style.height = `${rand2 / 2}px`;
                        splat_container.appendChild(splat_clone);

                        let splat_anim = splat_clone.animate(
                            [
                                { transform: 'scale(0)', opacity: 0 },
                                { transform: 'scale(1)', opacity: 0.15 },
                                { transform: 'scale(2)', opacity: 0 }
                            ],
                            {
                                duration: 500
                            }
                        );

                        splat_anim.onfinish = (event) => {
                            splat_clone.remove();
                        };
                    }
                }

                // lightning
                if (op.lightning == true && rand1 <= 1 && rand2 <= 50) {
                    container_bg.style.backgroundColor = op.lightning_color;
                    container_bg.style.opacity = 0.3;
                } else if (rand1 <= 80) {
                    container_bg.style.backgroundColor = op.bg_shade;
                    container_bg.style.opacity = op.bg_darkness / 10;
                }

                // stop or run animation
                count++;
                if (op.animation_time >= count) {
                    requestAnimationFrame(update);
                } else {
                    cancelAnimationFrame(update);
                }
            };

            update();
        };

        //////////////////////////// call function

        let option = {
            target_element: '#container', // taget HTML element
            where_to_insert: 'img', // Insert after the specified element in target_element. If unspecified, insert at the end of the target_element. ('img' 'p' '#id' etc)
            rain_amount: 5, // Amount of rain (min 1 max 10)
            rain_speed: 5, // Speed of rain (min 1 max 10)
            rain_color: '#FFF', // Color of rain (hex, rgba, name)
            rain_width: 1, // Width of rain
            rain_height: 5, // Length of rain
            rain_angle: 15, // Angle of rain (min -90 max 90)
            bg_shade: '#000', // Background shade (hex, rgba, name)
            bg_darkness: 5, // Adjust background brightness (min 0.0 max 10.0)
            splat: true, // Rain splat
            lightning: true, // Lightning
            lightning_color: '#FFF', // Color of lightning
            animation_time: 60 // Animation time (s)
        };

        dropRainAnim(option);
    </script>
<style>
    body {
        margin: 0;
    }

    p {
        margin: 20px;
    }

    #container {
        width: 100%;
        aspect-ratio: 2 / 1;
        background-color: #000;
    }

    #container img {
        width: 100%;
        object-fit: cover;
        aspect-ratio: 3 / 1;
    }

    #container p {
        position: absolute;
        left: 20px;
        top: 20px;
        font-size: 40px;
        color: #fff;
        font-weight: bold;
    }
</style>
</head>
<body>
    <div id="container">
        <!--  <img src="https://1-notes.com/images/ishidatami.jpg"> -->
        <!--  <p>Raining JavaScript.</p> -->
    </div>

    <p><a href="https://1-notes.com/javascript-drop-rain-animation/" target="_blank">JavaScript | Drop Rain Animation</a></p>
</body>
</html>