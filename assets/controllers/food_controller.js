import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
    static values = {
        images: Array,
        loadingImages: Array,
        finalGifs: Array,
        positiveAttributes: Array,
        locked: Boolean
    }

    static targets = ["img", "loader", "finalText"]

    connect() {
        if (!this.lockedValue) {
            this.startShuffle();
        }
    }

    startShuffle() {
        this.stopShuffle();
        this.imgTarget.classList.remove("instant");

        this.interval = setInterval(() => {
            const random = this.imagesValue[
                Math.floor(Math.random() * this.imagesValue.length)
                ];

            this.imgTarget.style.opacity = "0";

            setTimeout(() => {
                this.imgTarget.src = random;
                requestAnimationFrame(() => {
                    this.imgTarget.style.opacity = "1";
                });
            }, 1500); // matches fade time

        }, 4000); // slower switching
    }


    stop() {
        this.stopShuffle();
        this.loaderTarget.classList.remove("d-none");

        // dim image
        this.imgTarget.style.opacity = "0.3";

        // switch to fast animation mode
        this.imgTarget.classList.add("instant");

        this.playLoadingSequence();
    }

    playLoadingSequence() {
        let i = 0;

        this.loadingInterval = setInterval(() => {
            this.imgTarget.src = this.loadingImagesValue[i];
            i++;

            if (i >= this.loadingImagesValue.length) {
                clearInterval(this.loadingInterval);

                setTimeout(() => {
                    this.showFinalGif();
                }, 1000);
            }

        }, 600);
    }

    showFinalGif() {
        this.imgTarget.classList.remove("instant");
        this.imgTarget.style.opacity = "0";

        const finalGif = this.finalGifsValue[
            Math.floor(Math.random() * this.finalGifsValue.length)
            ];

        const attribute = this.positiveAttributesValue[
            Math.floor(Math.random() * this.positiveAttributesValue.length)
            ];

        setTimeout(() => {
            this.imgTarget.src = finalGif;
            this.imgTarget.style.opacity = "1";

            // ⭐ Show final text
            this.finalTextTarget.textContent =
                `Yeah, you're right — Sarah is ${attribute}! 🤌 But food suggestion?! Really? 😂`;
            this.finalTextTarget.classList.remove("d-none");
            this.finalTextTarget.classList.add("show");

        }, 200);

        this.loaderTarget.classList.add("d-none");
    }


    stopShuffle() {
        if (this.interval) clearInterval(this.interval);
        if (this.loadingInterval) clearInterval(this.loadingInterval);
    }

    disconnect() {
        this.stopShuffle();
    }
}
