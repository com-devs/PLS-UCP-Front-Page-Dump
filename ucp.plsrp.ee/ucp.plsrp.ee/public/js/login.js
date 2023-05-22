let v = new Vue({
    el: '#app',
    data: {
        showLog: false,
        lastbackground: -1,
    },
    methods: {


        keypress(e) {
            var code = e.keyCode
            if (code == 71) {
                this.showLog = !this.showLog
            }
        },

        getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
        },

        randomBackground(length) {

            var index = this.getRandomInt(length)
            if (index == this.lastbackground) {
                index = this.getRandomInt(length)
                this.lastbackground = index
            } else {
                this.lastbackground = index
            }

            return index
        },

    },

    created: function() {
        document.addEventListener('keydown', this.keypress);
    }
})

var usedIndices = [];

function generateBackground() {
    var images = document.querySelectorAll("#background img");

    if (usedIndices.length === images.length) {
        usedIndices = [];
    }

    var rnd = v.randomBackground(images.length)
    while (usedIndices.indexOf(rnd) !== -1) {
        rnd = v.randomBackground(images.length)
    }

    for (var i = images.length - 1; i >= 0; i--) {
        if (i == rnd) {
            document.getElementById("bak" + i).style.opacity = 1;
            TriggerAnimation("bak" + i)
        } else {
            document.getElementById("bak" + i).style.opacity = 0;
        }
    }
}

var el = document.getElementById("background");

function TriggerAnimation(elID) {
    var targert = document.getElementById(elID)
    targert.style.animation = 'none';
    targert.offsetHeight; /* trigger reflow */
    targert.style.animation = null;
}

//  Starting functions
setInterval(() => {
    generateBackground();
}, 5000);

generateBackground();