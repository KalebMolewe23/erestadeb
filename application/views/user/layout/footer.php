<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

<script>
    const bar = document.getElementById('bar');
    const close = document.getElementById('close');
    const nav = document.getElementById('navbar');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if (close) {
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }
</script>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    let spots = [];
    let hue = 0;

    const mouse ={
        x: undefined,
        y: undefined
    }
    canvas.addEventListener('mousemove', function (event){
        mouse.x = event.x;
        mouse.y = event.y;
        for (let i =0; i <3; i++){
            spots.push(new Particle());
        }
    });
    class Particle{
        constructor(){
            this.x = mouse.x;
            this.y = mouse.y;
            this.size = Math.random() * 2 + 0.1;
            this.speedX = Math.random() * 2 - 1;
            this.speedY = Math.random() * 2 - 1;
            this.color = 'hsl(' + hue + ', 100%, 50%)';
        }
        update(){
            this.x += this.speedX;
            this.y += this.speedY;
            if(this.size > 0.1) this.size -= 0.03;
        }
        draw(){
            ctx.fillstyle = this.color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }
    function handleParticle(){
        for (let i = 0; i < spots.length; i++){
            spots[i].update();
            spots[i].draw();
            for (let j = i; j < spots.length; j++){
                const dx = spots[i].x - spots[j].x;
                const dy = spots[i].y - spots[j].y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < 90){
                    ctx.beginPath();
                    ctx.strokeStyle = spots[i].color;
                    ctx.lineWidth = spots[i].size / 10;
                    ctx.moveTo(spots[i].x, spots[i].y);
                    ctx.lineTo(spots[i].x, spots[i].y);
                    ctx.stroke();
                }
            }
            if(spots[i].size <= 0.3){
                spots.splice(i, 1); i--;
            }
        }
    }
    function animate(){
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        handleParticle();
        hue++;
        requestAnimationFrame(animate);
    }
    window.addEventListener('resize', function (){
        canvas.width = innerWidth;
        canvas.height = innerHeight;
        init();
    })
    window.addEventListener('mouseout', function(){
        mouse.x = undefined;
        mouse.y = undefined
    })
    animate()
</script>

</body>

</html>