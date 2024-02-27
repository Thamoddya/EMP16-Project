@extends('layout.mainLayout')
@section('main_content')
    <!-- Alert Section -->
    <section class="alert-section top-50">
        <div class="container">
            <div class="alert-title" data-aos="zoom-in">
                Vertex Cooperation (PVT) Limited
            </div>
            <div class="alert-text" data-aos="zoom-in">
                Our mission is to establish a robust brand presence by delivering robust and dependable software
                solutions, nurturing innovation, and emphasizing excellence. We provide high-quality, user-friendly,
                secure software to empower individuals and organizations. Our values include transparency,
                collaboration, and employee well-being, driving a positive impact within our communities.
                <br>
            </div>
        </div>
    </section>
    <section style="overflow-x: hidden" class="first-hightlight-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 justify-content-center align-items-center">
                    <div id="wrapper justify-content-center align-items-center mt-3">
                        <div class="viewport">
                            <div class="cube">
                                <div class="side">
                                    <div class="cube-image">
                                        <img src="{{ asset('images/home/modalimg1.jpg') }}" />
                                    </div>
                                </div>
                                <div class="side">
                                    <div class="cube-image">
                                        <img src="{{ asset('images/home/modalimg2.jpg') }}" />
                                    </div>
                                </div>
                                <div class="side">
                                    <div class="cube-image">
                                        <img src="{{ asset('images/home/modelteam.jpg') }}" />
                                    </div>
                                </div>
                                <div class="side">
                                    <div class="cube-image">
                                        <img src="{{ asset('images/home/modalimg2.jpg') }}" />
                                    </div>
                                </div>
                                <div class="side">
                                    <div class="cube-image">
                                        <img src="{{ asset('images/home/modelteam.jpg') }}" />
                                    </div>
                                </div>
                                <div class="side">
                                    <div class="cube-image active">
                                        <img src="{{ asset('images/home/modalimg1.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="description-wrapper" data-aos="zoom-in">
                        <h6 data-textify class="mt-4">Vertex Cooperation is a multifaceted software company with an
                            integrated research center. The
                            company operates in the technology sector, focusing on software development, innovative designs,
                            and advanced research activities
                        </h6>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="overflow-x: hidden" class="second-hightlight-wrapper mb-3">
        <div class="container secondBG">
            <div class="new-alert">
                MODEL DEVELOPMENT
            </div>
            <div class="title-wraper bold black" data-aos="zoom-in">
                SIMPLY & ACCURATE
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="description-wrapper" data-aos="zoom-in">
                                    <h6 class="mt-4" data-textify>
                                        <span class="text-primary">Parking Area</span> The parking area is designated for
                                        employees and visitors to park their vehicles
                                        securely while they are at the company premises.
                                        <br>
                                        <br>
                                        <span class="text-primary">Product Launching area </span> This area is dedicated to
                                        the planning and execution of product launches.
                                        <br>
                                        <br>
                                        <span class="text-primary">Research Area</span> The research area is where teams
                                        conduct research activities to gather
                                        information, analyze data, and generate insights that contribute
                                        to the development and improvement of products or services.
                                        <br>
                                        <br>
                                        <span class="text-primary">Development Area</span> This is the workspace for
                                        full-stack developers who work on both the front-end
                                        and back-end aspects of software development.
                                        <br>
                                        <br>
                                        <span class="text-primary">Financial Department</span> The financial department is
                                        responsible for managing the company's financial
                                        activities.
                                        <br>
                                        <br>
                                        <span class="text-primary">Marketing area</span> The marketing area is where
                                        marketing professionals plan and execute strategies to
                                        promote the company's products or services.
                                        <br>
                                        <br>
                                        <span class="text-primary">Director Board </span> The director board area is where
                                        the company's board of directors holds meetings to discuss
                                        and make high-level decisions regarding the company's strategy, policies, and
                                        overall direction.
                                        <br>
                                        <br>
                                        <span class="text-primary">Cafe </span>The cafe is a designated space for employees
                                        to take breaks, socialize, and refresh. It may offer food and
                                        beverages, creating a casual and collaborative environment for employees to
                                        recharge.
                                        <br>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 " id="animatedDiv">
                        <div class="row">
                            <div class="col-12">
                                <img data-aos="fade-down" class="image-first" style="width: 100%;"
                                    src="{{ asset('images/home/modalTeam1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 mb-3">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row">
                        <video width="100%" class="col-12 secondBG m-1" autoplay muted loop>
                            <source src="{{ asset('images/home/modalVideo.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 secondBG">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 justify-content-center align-items-center">
                            <img src="{{ asset('images/home/modalimg1.jpg') }}"
                                style="width: 100%;border-radius: 5px" class="justify-content-center align-items-center" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



















    <script>
        var events = new Events();
        events.add = function(obj) {
            obj.events = {};
        }
        events.implement = function(fn) {
            fn.prototype = Object.create(Events.prototype);
        }

        function Events() {
            this.events = {};
        }
        Events.prototype.on = function(name, fn) {
            var events = this.events[name];
            if (events == undefined) {
                this.events[name] = [fn];
                this.emit('event:on', fn);
            } else {
                if (events.indexOf(fn) == -1) {
                    events.push(fn);
                    this.emit('event:on', fn);
                }
            }
            return this;
        }
        Events.prototype.once = function(name, fn) {
            var events = this.events[name];
            fn.once = true;
            if (!events) {
                this.events[name] = [fn];
                this.emit('event:once', fn);
            } else {
                if (events.indexOf(fn) == -1) {
                    events.push(fn);
                    this.emit('event:once', fn);
                }
            }
            return this;
        }
        Events.prototype.emit = function(name, args) {
            var events = this.events[name];
            if (events) {
                var i = events.length;
                while (i--) {
                    if (events[i]) {
                        events[i].call(this, args);
                        if (events[i].once) {
                            delete events[i];
                        }
                    }
                }
            }
            return this;
        }
        Events.prototype.unbind = function(name, fn) {
            if (name) {
                var events = this.events[name];
                if (events) {
                    if (fn) {
                        var i = events.indexOf(fn);
                        if (i != -1) {
                            delete events[i];
                        }
                    } else {
                        delete this.events[name];
                    }
                }
            } else {
                delete this.events;
                this.events = {};
            }
            return this;
        }

        var userPrefix;

        var prefix = (function() {
            var styles = window.getComputedStyle(document.documentElement, ''),
                pre = (Array.prototype.slice
                    .call(styles)
                    .join('')
                    .match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
                )[1],
                dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
            userPrefix = {
                dom: dom,
                lowercase: pre,
                css: '-' + pre + '-',
                js: pre[0].toUpperCase() + pre.substr(1)
            };
        })();

        function bindEvent(element, type, handler) {
            if (element.addEventListener) {
                element.addEventListener(type, handler, false);
            } else {
                element.attachEvent('on' + type, handler);
            }
        }

        function Viewport(data) {
            events.add(this);

            var self = this;

            this.element = data.element;
            this.fps = data.fps;
            this.sensivity = data.sensivity;
            this.sensivityFade = data.sensivityFade;
            this.touchSensivity = data.touchSensivity;
            this.speed = data.speed;

            this.lastX = 0;
            this.lastY = 0;
            this.mouseX = 0;
            this.mouseY = 0;
            this.distanceX = 0;
            this.distanceY = 0;
            this.positionX = 1122;
            this.positionY = 136;
            this.torqueX = 0;
            this.torqueY = 0;

            this.down = false;
            this.upsideDown = false;

            this.previousPositionX = 0;
            this.previousPositionY = 0;

            this.currentSide = 0;
            this.calculatedSide = 0;


            bindEvent(document, 'mousedown', function() {
                self.down = true;
            });

            bindEvent(document, 'mouseup', function() {
                self.down = false;
            });

            bindEvent(document, 'keyup', function() {
                self.down = false;
            });

            bindEvent(document, 'mousemove', function(e) {
                self.mouseX = e.pageX;
                self.mouseY = e.pageY;
            });

            bindEvent(document, 'touchstart', function(e) {

                self.down = true;
                e.touches ? e = e.touches[0] : null;
                self.mouseX = e.pageX / self.touchSensivity;
                self.mouseY = e.pageY / self.touchSensivity;
                self.lastX = self.mouseX;
                self.lastY = self.mouseY;
            });

            bindEvent(document, 'touchmove', function(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }

                if (e.touches.length == 1) {

                    e.touches ? e = e.touches[0] : null;

                    self.mouseX = e.pageX / self.touchSensivity;
                    self.mouseY = e.pageY / self.touchSensivity;

                }
            });

            bindEvent(document, 'touchend', function(e) {
                self.down = false;
            });

            setInterval(this.animate.bind(this), this.fps);

        }
        events.implement(Viewport);
        Viewport.prototype.animate = function() {

            this.distanceX = (this.mouseX - this.lastX);
            this.distanceY = (this.mouseY - this.lastY);

            this.lastX = this.mouseX;
            this.lastY = this.mouseY;

            if (this.down) {
                this.torqueX = this.torqueX * this.sensivityFade + (this.distanceX * this.speed - this.torqueX) * this
                    .sensivity;
                this.torqueY = this.torqueY * this.sensivityFade + (this.distanceY * this.speed - this.torqueY) * this
                    .sensivity;
            }

            if (Math.abs(this.torqueX) > 1.0 || Math.abs(this.torqueY) > 1.0) {
                if (!this.down) {
                    this.torqueX *= this.sensivityFade;
                    this.torqueY *= this.sensivityFade;
                }

                this.positionY -= this.torqueY;

                if (this.positionY > 360) {
                    this.positionY -= 360;
                } else if (this.positionY < 0) {
                    this.positionY += 360;
                }

                if (this.positionY > 90 && this.positionY < 270) {
                    this.positionX -= this.torqueX;

                    if (!this.upsideDown) {
                        this.upsideDown = true;
                        this.emit('upsideDown', {
                            upsideDown: this.upsideDown
                        });
                    }

                } else {

                    this.positionX += this.torqueX;

                    if (this.upsideDown) {
                        this.upsideDown = false;
                        this.emit('upsideDown', {
                            upsideDown: this.upsideDown
                        });
                    }
                }

                if (this.positionX > 360) {
                    this.positionX -= 360;
                } else if (this.positionX < 0) {
                    this.positionX += 360;
                }

                if (!(this.positionY >= 46 && this.positionY <= 130) && !(this.positionY >= 220 && this.positionY <=
                        308)) {
                    if (this.upsideDown) {
                        if (this.positionX >= 42 && this.positionX <= 130) {
                            this.calculatedSide = 3;
                        } else if (this.positionX >= 131 && this.positionX <= 223) {
                            this.calculatedSide = 2;
                        } else if (this.positionX >= 224 && this.positionX <= 314) {
                            this.calculatedSide = 5;
                        } else {
                            this.calculatedSide = 4;
                        }
                    } else {
                        if (this.positionX >= 42 && this.positionX <= 130) {
                            this.calculatedSide = 5;
                        } else if (this.positionX >= 131 && this.positionX <= 223) {
                            this.calculatedSide = 4;
                        } else if (this.positionX >= 224 && this.positionX <= 314) {
                            this.calculatedSide = 3;
                        } else {
                            this.calculatedSide = 2;
                        }
                    }
                } else {
                    if (this.positionY >= 46 && this.positionY <= 130) {
                        this.calculatedSide = 6;
                    }

                    if (this.positionY >= 220 && this.positionY <= 308) {
                        this.calculatedSide = 1;
                    }
                }

                if (this.calculatedSide !== this.currentSide) {
                    this.currentSide = this.calculatedSide;
                    this.emit('sideChange');
                }

            }

            this.element.style[userPrefix.js + 'Transform'] = 'rotateX(' + this.positionY + 'deg) rotateY(' + this
                .positionX + 'deg)';

            if (this.positionY != this.previousPositionY || this.positionX != this.previousPositionX) {
                this.previousPositionY = this.positionY;
                this.previousPositionX = this.positionX;

                this.emit('rotate');

            }

        }
        var viewport = new Viewport({
            element: document.getElementsByClassName('cube')[0],
            fps: 20,
            sensivity: .1,
            sensivityFade: .93,
            speed: 2,
            touchSensivity: 1.5
        });

        function Cube(data) {
            var self = this;

            this.element = data.element;
            this.sides = this.element.getElementsByClassName('side');

            this.viewport = data.viewport;
            this.viewport.on('rotate', function() {
                self.rotateSides();
            });
            this.viewport.on('upsideDown', function(obj) {
                self.upsideDown(obj);
            });
            this.viewport.on('sideChange', function() {
                self.sideChange();
            });
        }
        Cube.prototype.rotateSides = function() {
            var viewport = this.viewport;
            if (viewport.positionY > 90 && viewport.positionY < 270) {
                this.sides[0].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + (
                    viewport.positionX + viewport.torqueX) + 'deg)';
                this.sides[5].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + -
                    (viewport.positionX + 180 + viewport.torqueX) + 'deg)';
            } else {
                this.sides[0].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + (
                    viewport.positionX - viewport.torqueX) + 'deg)';
                this.sides[5].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + -
                    (viewport.positionX + 180 - viewport.torqueX) + 'deg)';
            }
        }
        Cube.prototype.upsideDown = function(obj) {

            var deg = (obj.upsideDown == true) ? '180deg' : '0deg';
            var i = 5;

            while (i > 0 && --i) {
                this.sides[i].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' +
                    deg + ')';
            }

        }
        Cube.prototype.sideChange = function() {

            for (var i = 0; i < this.sides.length; ++i) {
                this.sides[i].getElementsByClassName('cube-image')[0].className = 'cube-image';
            }

            this.sides[this.viewport.currentSide - 1].getElementsByClassName('cube-image')[0].className =
                'cube-image active';

        }

        new Cube({
            viewport: viewport,
            element: document.getElementsByClassName('cube')[0]
        });
    </script>
@endsection
