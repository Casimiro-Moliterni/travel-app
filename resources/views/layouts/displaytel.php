<nav class="amazing-tabs">
    <div class="main-tabs-container">
        <div class="main-tabs-wrapper">
            <ul class="main-tabs">
                <li>
                    <button class="round-button" data-translate-value="0" data-color="red">
                        <span class="avatar">
                            <img src="https://sd2.org/app/uploads/2021/04/pexels-pixabay-270348-1120x1032.jpg" alt="user avatar" />
                        </span>
                    </button>
                </li>
                <li>
                    <button class="round-button gallery active" style="--round-button-active-color: #2962ff" data-translate-value="100%" data-color="blue">
                        <svg fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="round-button" style="--round-button-active-color: #00c853" data-translate-value="200%" data-color="green">
                        <svg fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="round-button" style="--round-button-active-color: #aa00ff" data-translate-value="300%" data-color="purple">
                        <svg fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="round-button" style="--round-button-active-color: #ff6d00" data-translate-value="400%" data-color="orange">
                        <svg fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </button>
                </li>
            </ul>
            <div class="main-slider" aria-hidden="true">
                <div class="main-slider-circle"> </div>
            </div>
        </div>
    </div>
</nav>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --background-color: #bbdefb;
        --blue-50: #e3f2fd;
        --blue-100: #bbdefb;
        --blue-A700: #2962ff;
        --green-50: #e8f5e9;
        --green-100: #c8e6c9;
        --green-A700: #00c853;
        --purple-50: #f3e5f5;
        --purple-100: #e1bee7;
        --purple-A700: #aa00ff;
        --orange-50: #fff3e0;
        --orange-100: #ffe0b2;
        --orange-A700: #ff6d00;
        --orange-700: #f57c00;
        --grey-900: #212121;
        --white: #ffffff;
        --round-button-active-color: #212121;
        --translate-main-slider: 100%;
        --main-slider-color: #e3f2fd;
        --translate-filters-slider: 0;
        --filters-container-height: 3.8rem;
        --filters-wrapper-opacity: 1;
    }




    html {
        font-size: 62.5%;
    }

    /*
    html,
    body {
        height: 100%;
    } */

    /* body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: background-color 0.4s ease-in-out;
        background-color: var(--background-color);
    } */

    button {
        border: none;
        cursor: pointer;
        background-color: transparent;
        outline: none;
    }

    nav.amazing-tabs {
        background-color: var(--white);
        border-radius: 2.5rem;
        user-select: none;
        padding-top: 1rem;
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        border: 1px solid;
    }

    .main-tabs-container {
        padding: 0 1rem 1rem 1rem;
    }

    .main-tabs-wrapper {
        position: relative;
    }

    ul.main-tabs,
    ul.filter-tabs {
        list-style-type: none;
        display: flex;
    }

    ul.main-tabs li {
        display: inline-flex;
        position: relative;
        padding: 1.5rem;
        z-index: 1;
    }

    .avatar,
    .avatar img {
        height: 4rem;
        width: 4rem;
        border-radius: 50%;
        pointer-events: none;
    }

    .avatar img {
        object-fit: cover;
    }

    .round-button {
        height: 4.8rem;
        width: 4.8rem;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: var(--grey-900);
        transition: color 0.2s ease-in-out;
    }

    .round-button:hover,
    .round-button.active {
        color: var(--round-button-active-color);
    }

    .round-button svg {
        pointer-events: none;
        height: 2.8rem;
        width: 2.8rem;
        transform: translate(0, 0);
    }

    .main-slider {
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 20px;
        padding: 1.5rem;
        z-index: 0;
        transition: transform 0.4s ease-in-out;
        transform: translateX(var(--translate-main-slider));
    }

    .main-slider-circle {
        height: 4.8rem;
        width: 4.8rem;
        border-radius: 50%;
        transition: background-color 0.4s ease-in-out;
        background-color: var(--main-slider-color);
    }

    .animate-jello {
        animation: jello-horizontal 0.9s both;
    }

    @keyframes jello-horizontal {
        0% {
            transform: scale3d(1, 1, 1);
        }

        30% {
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            transform: scale3d(0.95, 1.05, 1);
        }

        75% {
            transform: scale3d(1.05, 0.95, 1);
        }

        100% {
            transform: scale3d(1, 1, 1);
        }
    }

    .filters-container {
        overflow: hidden;
        padding: 0 3rem;
        transition: max-height 0.4s ease-in-out;
        max-height: var(--filters-container-height);
    }

    .filters-wrapper {
        position: relative;
        transition: opacity 0.2s ease-in-out;
        opacity: var(--filters-wrapper-opacity);
    }

    .filter-tabs {
        border-radius: 1rem;
        padding: 0.3rem;
        overflow: hidden;
        background-color: var(--orange-50);
    }

    .filter-tabs li {
        position: relative;
        z-index: 1;
        display: flex;
        flex: 1 0 33.33%;
    }

    .filter-button {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.8rem;
        flex-grow: 1;
        height: 3rem;
        padding: 0 1.5rem;
        color: var(--orange-700);
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        font-size: 1.4rem;
    }

    .filter-button.filter-active {
        transition: color 0.4s ease-in-out;
        color: var(--grey-900);
    }

    .filter-slider {
        pointer-events: none;
        position: absolute;
        padding: 0.3rem;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
    }

    .filter-slider-rect {
        height: 3rem;
        width: 33.33%;
        border-radius: 0.8rem;
        background-color: var(--white);
        box-shadow: 0 0.1rem 1rem -0.4rem rgba(0, 0, 0, 0.12);
        transition: transform 0.4s ease-in-out;
        transform: translateX(var(--translate-filters-slider));
    }

    @media (min-width: 991px) {
        nav {
            display: none;
        }
    }
</style>


<!-- <script>
    const mainTabs = document.querySelector(".main-tabs");
    const mainSliderCircle = document.querySelector(".main-slider-circle");
    const roundButtons = document.querySelectorAll(".round-button");
    

    const colors = {
        blue: {
            50: {
                value: "#e3f2fd"
            },
            100: {
                value: "#bbdefb"
            }
        },
        green: {
            50: {
                value: "#e8f5e9"
            },
            100: {
                value: "#c8e6c9"
            }
        },
        purple: {
            50: {
                value: "#f3e5f5"
            },
            100: {
                value: "#e1bee7"
            }
        },
        orange: {
            50: {
                value: "#ffe0b2"
            },
            100: {
                value: "#ffe0b2"
            }
        },
        red: {
            50: {
                value: "#ffebee"
            },
            100: {
                value: "#ffcdd2"
            }
        }
    };

    const getColor = (color, variant) => {
        return colors[color][variant].value;
    };

    const handleActiveTab = (tabs, event, className) => {
        tabs.forEach((tab) => {
            tab.classList.remove(className);
        });

        if (!event.target.classList.contains(className)) {
            event.target.classList.add(className);
        }
    };

    mainTabs.addEventListener("click", (event) => {
        const root = document.documentElement;
        const targetColor = event.target.dataset.color;
        const targetTranslateValue = event.target.dataset.translateValue;

        if (event.target.classList.contains("round-button")) {
            mainSliderCircle.classList.remove("animate-jello");
            void mainSliderCircle.offsetWidth;
            mainSliderCircle.classList.add("animate-jello");

            root.style.setProperty("--translate-main-slider", targetTranslateValue);
            root.style.setProperty("--main-slider-color", getColor(targetColor, 50));
            root.style.setProperty("--background-color", getColor(targetColor, 100));

            handleActiveTab(roundButtons, event, "active");

        }
    });
</script> -->

<script>
    const mainTabs = document.querySelector(".main-tabs");
    const mainSliderCircle = document.querySelector(".main-slider-circle");
    const roundButtons = document.querySelectorAll(".round-button");
    const mainElement = document.querySelector(".main"); // Seleziona l'elemento .main

    const colors = {
        blue: {
            50: { value: "#e3f2fd" },
            100: { value: "#bbdefb" }
        },
        green: {
            50: { value: "#e8f5e9" },
            100: { value: "#c8e6c9" }
        },
        purple: {
            50: { value: "#f3e5f5" },
            100: { value: "#e1bee7" }
        },
        orange: {
            50: { value: "#ffe0b2" },
            100: { value: "#ffe0b2" }
        },
        red: {
            50: { value: "#ffebee" },
            100: { value: "#ffcdd2" }
        }
    };

    const getColor = (color, variant) => {
        return colors[color][variant].value;
    };

    const handleActiveTab = (tabs, event, className) => {
        tabs.forEach((tab) => {
            tab.classList.remove(className);
        });

        if (!event.target.classList.contains(className)) {
            event.target.classList.add(className);
        }
    };

    mainTabs.addEventListener("click", (event) => {
        const root = document.documentElement;
        const targetColor = event.target.dataset.color;
        const targetTranslateValue = event.target.dataset.translateValue;

        if (event.target.classList.contains("round-button")) {
            mainSliderCircle.classList.remove("animate-jello");
            void mainSliderCircle.offsetWidth;
            mainSliderCircle.classList.add("animate-jello");

            // Aggiorna le proprietà CSS
            root.style.setProperty("--translate-main-slider", targetTranslateValue);
            root.style.setProperty("--main-slider-color", getColor(targetColor, 50));
            root.style.setProperty("--background-color", getColor(targetColor, 100));

            // Cambia il colore di background dell'elemento .main
            if (mainElement) {
                mainElement.style.backgroundColor = getColor(targetColor, 50);
            }

            handleActiveTab(roundButtons, event, "active");
        }
    });
</script>
