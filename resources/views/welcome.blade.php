<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('node_modules/mdb-ui-kit/css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/mdb-ui-kit/css/custom.css')}}" />
</head>
<body>
<!-- Start project here-->
<nav class="navbar navbar-light bg-white shadow-none">
    <div class="container-fluid">
        <a class="navbar-brand">
            <!-- back btn -->
            <div class="container mt-3">
                <button type="button" class="btn btn-primary-outline rounded-circle px-3 shadow-none"><i class="fas fa-redo fa-2x"></i></button>
            </div>
            <!-- back btn -->
        </a>
        <form class="d-flex input-group w-auto">
            <img
                src="{{asset('node_modules/mdb-ui-kit/img/Group 24.png')}}"
                height="40"
                alt="MDB Logo"
                loading="lazy"
            />
        </form>
    </div>
</nav>


<div class="container main-page d-flex justify-content-center flex-wrap p-3 text-center">

    <!-- svg container-->
    <div class="container mt-5 mb-5">
        <div class="img-fluid">
            <svg width="410" height="209" viewBox="0 0 410 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Group 3">
                    <g id="Group 2">
                        <path id="Path 193" d="M194.116 45.079C197.342 39.744 201.164 34.048 207.149 32.307C214.081 30.29 221.202 34.297 227.242 38.252C245.305 50.0785 262.7 62.895 279.348 76.643L279.33 76.85L240.448 74.169C231.084 73.523 221.398 72.788 213.123 68.359C209.983 66.678 206.923 64.433 203.363 64.276C198.942 64.082 195.087 67.169 192.063 70.395C174.144 89.477 168.963 118.657 148.854 135.422C161.531 104.159 176.667 73.9505 194.121 45.081L194.116 45.079Z" fill="#F2F2F2"/>
                        <path id="Path 194" d="M83.968 206.927C85.95 204.427 86.759 203.839 88.714 201.313C104.629 180.728 119.589 159.449 133.592 137.474C143.103 122.549 152.143 107.338 160.712 91.84C164.791 84.472 168.758 77.0464 172.612 69.563C175.604 63.763 178.529 57.9257 181.387 52.051C182.204 50.374 182.999 48.689 183.787 47C185.649 43.029 187.477 39.038 189.439 35.121C191.675 30.656 194.397 25.976 198.503 22.976C200.372 21.5549 202.607 20.695 204.946 20.497C208.289 20.281 211.373 21.661 214.272 23.169C235.506 34.3317 255.326 47.9992 273.307 63.879C291.316 79.6952 307.412 97.5636 321.269 117.12C321.693 117.725 322.696 117.147 322.269 116.538C320.584 114.155 318.866 111.798 317.114 109.467C295.333 80.4989 268.626 55.5881 238.214 35.873C233.097 32.557 227.885 29.3967 222.576 26.392C219.9 24.877 217.213 23.381 214.476 21.977C211.857 20.4414 208.919 19.5311 205.89 19.317C195.472 19.155 190.079 30.953 186.373 38.891C185.208 41.389 184.03 43.8797 182.838 46.363C178.331 55.7897 173.65 65.1303 168.796 74.385C165.8 80.099 162.739 85.7794 159.612 91.426C149.879 109.011 139.536 126.24 128.583 143.113C114.071 165.463 99.674 185.207 83.142 206.108C82.696 206.688 83.509 207.513 83.968 206.927Z" fill="#E4E4E4"/>
                        <path id="Path 195" d="M274.341 58.055C274.946 57.38 275.548 56.706 276.157 56.031C280.957 50.718 286.115 45.467 292.713 42.421C295.858 40.9226 299.292 40.1265 302.776 40.088C306.37 40.187 309.914 40.96 313.223 42.367C314.796 42.995 316.335 43.709 317.85 44.467C319.581 45.338 321.282 46.267 322.974 47.204C326.151 48.962 329.286 50.7973 332.381 52.71C338.538 56.5153 344.503 60.611 350.274 64.997C353.266 67.2716 356.196 69.621 359.065 72.045C361.732 74.2963 364.346 76.6083 366.907 78.981C367.454 79.486 368.272 78.669 367.724 78.164C367.049 77.536 366.367 76.911 365.684 76.294C363.756 74.5513 361.797 72.842 359.808 71.166C356.18 68.1047 352.458 65.1616 348.643 62.337C342.71 57.9416 336.572 53.8447 330.229 50.046C327.06 48.1493 323.847 46.332 320.59 44.594C319.607 44.07 318.612 43.557 317.606 43.071C315.323 41.9192 312.95 40.9534 310.512 40.183C307.058 39.0658 303.403 38.707 299.798 39.131C296.316 39.6375 292.962 40.7979 289.912 42.551C283.435 46.171 278.412 51.769 273.522 57.233C273.03 57.789 273.844 58.61 274.341 58.055Z" fill="#E4E4E4"/>
                        <path id="Path 196" d="M141.626 113.111L126.105 107.434L118.399 104.615C115.909 103.613 113.37 102.738 110.791 101.995C108.536 101.351 106.142 101.382 103.905 102.083C101.91 102.821 100.083 103.954 98.534 105.412C96.9518 106.868 95.4794 108.439 94.129 110.112C92.451 112.128 90.798 114.166 89.138 116.196C82.2853 124.577 75.4773 132.994 68.714 141.448C61.9507 149.902 55.2327 158.391 48.56 166.916C41.8713 175.462 35.2283 184.044 28.631 192.661C27.823 193.717 27.0157 194.773 26.209 195.83C25.763 196.414 24.758 195.838 25.209 195.246C31.8543 186.542 38.5463 177.873 45.285 169.24C52.0397 160.587 58.8396 151.97 65.685 143.389C72.5303 134.808 79.4247 126.266 86.368 117.761C88.0973 115.642 89.8307 113.525 91.568 111.411C93.031 109.627 94.478 107.825 96.083 106.165C99.029 103.118 102.71 100.425 107.116 100.352C109.695 100.443 112.237 101.002 114.616 102.002C117.211 102.941 119.799 103.897 122.391 104.845L138.02 110.562L141.927 111.991C142.62 112.245 142.321 113.363 141.62 113.106L141.626 113.111Z" fill="#E4E4E4"/>
                        <path id="Path 197" d="M294.755 49.106C298.743 47.1401 303.182 46.2707 307.617 46.587C312.052 46.9034 316.323 48.394 319.991 50.906C306.166 53.2913 292.492 56.4827 279.04 60.464C284.627 57.195 288.997 52.066 294.755 49.106Z" fill="#F2F2F2"/>
                        <path id="Path 198" d="M320.069 50.896L321.587 52.13C321.073 51.698 320.54 51.293 319.987 50.91L320.069 50.896Z" fill="#F2F2F2"/>
                        <path id="Path 199" d="M99.118 113.166C100.646 111.306 102.298 109.359 104.583 108.604L106.717 108.688C90.4755 137.387 68.54 162.465 42.257 182.381L99.118 113.166Z" fill="#F2F2F2"/>
                        <path id="Path 200" d="M386.345 97.872C385.667 97.1921 384.862 96.6529 383.975 96.2856C383.089 95.9184 382.138 95.7302 381.178 95.732V91.472C381.179 90.4979 380.987 89.5333 380.615 88.6332C380.242 87.7332 379.696 86.9154 379.007 86.2266C378.319 85.5379 377.501 84.9916 376.601 84.6191C375.701 84.2467 374.736 84.0553 373.762 84.056V80.852H375.527C376.282 80.852 377.006 80.552 377.54 80.0181C378.074 79.4842 378.374 78.76 378.374 78.005C378.374 77.2499 378.074 76.5258 377.54 75.9919C377.006 75.4579 376.282 75.158 375.527 75.158H373.762V72.933H372.889V75.158H370.782C370.027 75.158 369.303 75.4579 368.769 75.9919C368.235 76.5258 367.935 77.2499 367.935 78.005C367.935 78.76 368.235 79.4842 368.769 80.0181C369.303 80.552 370.027 80.852 370.782 80.852H372.889V84.06H367.451C366.407 84.0608 365.406 84.4762 364.668 85.2148C363.93 85.9535 363.516 86.9549 363.516 87.999V95.733H362.259C360.318 95.7328 358.397 96.115 356.604 96.8576C354.811 97.6002 353.182 98.6886 351.81 100.061C350.438 101.433 349.35 103.062 348.607 104.855C347.865 106.648 347.483 108.569 347.483 110.51V120.845C344.798 121.619 342.368 123.096 340.446 125.124C338.523 127.152 337.177 129.656 336.548 132.379H330.071V125.835H326.145V123.083H328.555C329.31 123.083 330.034 122.783 330.568 122.249C331.102 121.715 331.402 120.991 331.402 120.236C331.402 119.481 331.102 118.757 330.568 118.223C330.034 117.689 329.31 117.389 328.555 117.389H326.145V115.582H325.272V117.389H323.806C323.051 117.389 322.327 117.689 321.793 118.223C321.259 118.757 320.959 119.481 320.959 120.236C320.959 120.991 321.259 121.715 321.793 122.249C322.327 122.783 323.051 123.083 323.806 123.083H325.268V125.847C324.266 125.905 323.323 126.344 322.634 127.075C321.945 127.805 321.56 128.771 321.56 129.775V132.403C317.788 132.612 314.239 134.257 311.643 137.001C309.046 139.745 307.599 143.379 307.599 147.157V207.638H388.485V103.038C388.487 102.078 388.299 101.127 387.931 100.241C387.564 99.3538 387.025 98.5485 386.345 97.871V97.872Z" fill="#F2F2F2"/>
                        <path id="Path 201" d="M303.873 95.731V91.477C303.873 89.5099 303.092 87.6233 301.701 86.2324C300.31 84.8414 298.423 84.06 296.456 84.06V79.903H298.183C298.938 79.903 299.662 79.603 300.196 79.0691C300.73 78.5352 301.03 77.8111 301.03 77.056C301.03 76.3009 300.73 75.5768 300.196 75.0428C299.662 74.5089 298.938 74.209 298.183 74.209H296.456V72.935H295.583V74.209H293.438C292.683 74.209 291.959 74.5089 291.425 75.0428C290.891 75.5768 290.591 76.3009 290.591 77.056C290.591 77.8111 290.891 78.5352 291.425 79.0691C291.959 79.603 292.683 79.903 293.438 79.903H295.583V84.06H290.142C289.625 84.06 289.113 84.1619 288.635 84.3598C288.157 84.5578 287.722 84.8479 287.357 85.2137C286.991 85.5795 286.701 86.0137 286.503 86.4916C286.305 86.9695 286.203 87.4817 286.203 87.999V95.73H284.947C281.028 95.73 277.269 97.287 274.497 100.058C271.726 102.83 270.169 106.589 270.169 110.508V120.083C267.685 121.153 265.521 122.848 263.886 125.002C262.251 127.157 261.202 129.698 260.84 132.378H252.76V125.834H248.832V122.134H250.257C251.012 122.134 251.736 121.834 252.27 121.3C252.804 120.766 253.104 120.042 253.104 119.287C253.104 118.532 252.804 117.808 252.27 117.274C251.736 116.74 251.012 116.44 250.257 116.44H248.832V115.582H247.959V116.44H245.511C244.756 116.44 244.032 116.74 243.498 117.274C242.964 117.808 242.664 118.532 242.664 119.287C242.664 120.042 242.964 120.766 243.498 121.3C244.032 121.834 244.756 122.134 245.511 122.134H247.959V125.847C246.957 125.905 246.014 126.344 245.325 127.075C244.635 127.805 244.251 128.771 244.251 129.775V132.403C240.479 132.612 236.93 134.257 234.334 137.001C231.737 139.745 230.29 143.379 230.29 147.157V207.638H311.179V103.039C311.179 101.101 310.409 99.2426 309.039 97.8722C307.669 96.5017 305.811 95.7315 303.873 95.731Z" fill="#F2F2F2"/>
                        <path id="Path 202" d="M409.13 207.962C409.13 208.036 409.116 208.11 409.087 208.179C409.059 208.247 409.018 208.31 408.965 208.362C408.913 208.415 408.85 208.456 408.781 208.485C408.713 208.513 408.639 208.527 408.565 208.527L127.335 208.627H126.348L68.307 208.646H67.349L17.949 208.665H16.991H1.56996C1.49383 208.668 1.41784 208.656 1.34656 208.629C1.27528 208.602 1.21017 208.561 1.15517 208.508C1.10017 208.456 1.0564 208.392 1.0265 208.322C0.996606 208.252 0.981201 208.177 0.981201 208.1C0.981201 208.024 0.996606 207.949 1.0265 207.879C1.0564 207.809 1.10017 207.745 1.15517 207.693C1.21017 207.64 1.27528 207.599 1.34656 207.572C1.41784 207.545 1.49383 207.533 1.56996 207.536H17.153H18.111L67.502 207.517H68.46L126.05 207.498H127.032L176.105 207.479H176.75L408.571 207.394C408.645 207.394 408.719 207.408 408.787 207.436C408.856 207.465 408.919 207.506 408.971 207.559C409.024 207.611 409.065 207.674 409.094 207.742C409.122 207.811 409.136 207.885 409.136 207.959L409.13 207.962Z" fill="#CACACA"/>
                        <path id="Rectangle 14" d="M250.143 158.556H255.597V154.193H250.143V158.556Z" fill="white"/>
                        <path id="Rectangle 15" d="M241.199 158.556H246.653V154.193H241.199V158.556Z" fill="white"/>
                        <path id="Rectangle 16" d="M250.143 169.681H255.597V165.318H250.143V169.681Z" fill="white"/>
                        <path id="Rectangle 17" d="M241.199 169.681H246.653V165.318H241.199V169.681Z" fill="white"/>
                        <path id="Rectangle 18" d="M250.143 180.806H255.597V176.443H250.143V180.806Z" fill="white"/>
                        <path id="Rectangle 19" d="M241.199 180.806H246.653V176.443H241.199V180.806Z" fill="white"/>
                        <path id="Rectangle 20" d="M241.199 191.932H246.653V187.569H241.199V191.932Z" fill="white"/>
                        <path id="Rectangle 21" d="M241.199 203.056H246.653V198.693H241.199V203.056Z" fill="white"/>
                        <path id="Rectangle 22" d="M281.84 146.231H299.51V144.922H281.84V146.231Z" fill="white"/>
                        <path id="Rectangle 23" d="M281.84 154.302H299.51V152.993H281.84V154.302Z" fill="white"/>
                        <path id="Rectangle 24" d="M281.84 162.373H299.51V161.064H281.84V162.373Z" fill="white"/>
                        <path id="Rectangle 25" d="M292.311 90.822H297.765V86.459H292.311V90.822Z" fill="white"/>
                        <path id="Rectangle 26" d="M327.449 169.681H332.903V165.318H327.449V169.681Z" fill="white"/>
                        <path id="Rectangle 27" d="M318.505 169.681H323.959V165.318H318.505V169.681Z" fill="white"/>
                        <path id="Rectangle 28" d="M327.449 180.806H332.903V176.443H327.449V180.806Z" fill="white"/>
                        <path id="Rectangle 29" d="M318.505 180.806H323.959V176.443H318.505V180.806Z" fill="white"/>
                        <path id="Rectangle 30" d="M327.449 191.932H332.903V187.569H327.449V191.932Z" fill="white"/>
                        <path id="Rectangle 31" d="M318.505 191.932H323.959V187.569H318.505V191.932Z" fill="white"/>
                        <path id="Rectangle 32" d="M327.449 203.056H332.903V198.693H327.449V203.056Z" fill="white"/>
                        <path id="Rectangle 33" d="M318.505 203.056H323.959V198.693H318.505V203.056Z" fill="white"/>
                        <path id="Rectangle 34" d="M369.617 90.822H375.071V86.459H369.617V90.822Z" fill="white"/>
                        <path id="Ellipse 40" d="M279.094 25.338C286.091 25.338 291.763 19.6659 291.763 12.669C291.763 5.6721 286.091 0 279.094 0C272.097 0 266.425 5.6721 266.425 12.669C266.425 19.6659 272.097 25.338 279.094 25.338Z" fill="#F87F0B"/>
                        <path id="Path 204" d="M307.452 6.671C307.094 5.49985 306.402 4.45878 305.46 3.67569C304.519 2.8926 303.369 2.40159 302.152 2.263C302.124 2.263 302.098 2.263 302.071 2.263C302.036 2.25213 302 2.24378 301.963 2.238C296.169 1.489 289.481 4.26 287.063 9.753C286.473 8.95047 285.697 8.30351 284.801 7.86796C283.906 7.43241 282.917 7.22136 281.922 7.253C280.638 7.33838 279.411 7.81746 278.409 8.62501C277.407 9.43257 276.678 10.5294 276.322 11.766C276.285 11.9168 276.297 12.0755 276.355 12.2192C276.414 12.363 276.517 12.4844 276.649 12.566C277.032 12.8904 277.485 13.1206 277.973 13.238C279.025 13.4607 280.081 13.665 281.141 13.851C283.208 14.213 285.286 14.5057 287.377 14.729C291.618 15.1836 295.886 15.345 300.149 15.212C301.548 15.268 302.943 15.0232 304.239 14.494C305.186 14.0264 305.995 13.3207 306.586 12.446C307.144 11.6053 307.51 10.6524 307.66 9.65463C307.81 8.65684 307.739 7.63837 307.452 6.671Z" fill="#F0F0F0"/>
                        <path id="Path 205" d="M281.119 23.564C280.761 22.3928 280.069 21.3518 279.127 20.5687C278.186 19.7856 277.036 19.2946 275.819 19.156C275.791 19.156 275.765 19.156 275.738 19.156C275.703 19.1451 275.667 19.1368 275.63 19.131C269.836 18.382 263.148 21.153 260.73 26.646C260.14 25.8435 259.364 25.1966 258.469 24.7611C257.573 24.3255 256.585 24.1144 255.59 24.146C254.306 24.2314 253.079 24.7105 252.077 25.518C251.075 26.3256 250.346 27.4223 249.99 28.659C249.953 28.8098 249.964 28.9685 250.023 29.1122C250.082 29.256 250.185 29.3774 250.317 29.459C250.7 29.7834 251.153 30.0136 251.641 30.131C252.693 30.3537 253.749 30.558 254.809 30.744C256.876 31.106 258.954 31.3987 261.045 31.622C265.286 32.0766 269.554 32.238 273.818 32.105C275.217 32.161 276.612 31.9162 277.908 31.387C278.854 30.9194 279.663 30.2136 280.254 29.339C280.811 28.4981 281.178 27.5452 281.327 26.5475C281.476 25.5497 281.405 24.5313 281.119 23.564Z" fill="#F0F0F0"/>
                        <path id="Rectangle 35" d="M388.484 105.051H375.051V107.898H388.484V105.051Z" fill="white"/>
                        <path id="Rectangle 36" d="M388.484 113.592H375.051V116.439H388.484V113.592Z" fill="white"/>
                        <path id="Rectangle 37" d="M388.484 122.133H375.051V124.98H388.484V122.133Z" fill="white"/>
                        <path id="Rectangle 38" d="M388.484 130.674H375.051V133.521H388.484V130.674Z" fill="white"/>
                        <path id="Rectangle 39" d="M388.484 139.215H375.051V142.062H388.484V139.215Z" fill="white"/>
                        <path id="Rectangle 40" d="M388.484 147.756H375.051V150.603H388.484V147.756Z" fill="white"/>
                        <path id="Path 1" d="M113.783 138.167C131.409 175.027 170.973 191.987 210.316 191.367C239.148 191.631 269.089 183.51 289.623 162.318C296.641 155.319 302.38 147.145 306.58 138.167C301.891 158.173 287.517 175.343 270.031 185.992C243.087 202.046 209.638 204.292 179.491 197.508C149.591 190.767 121.439 168.567 113.783 138.167Z" fill="#402A80"/>
                    </g>
                    <g id="guider">
                        <path id="Ellipse 48" d="M180.794 117.475C177.269 115.185 168.499 122.431 161.206 133.659C153.912 144.887 150.857 155.845 154.382 158.134C157.907 160.424 166.677 153.178 173.97 141.95C181.264 130.723 184.319 119.765 180.794 117.475Z" fill="#402A80"/>
                        <path id="Ellipse 47" d="M212.144 169.861C238.908 169.861 260.606 148.164 260.606 121.399C260.606 94.6345 238.908 72.9373 212.144 72.9373C185.379 72.9373 163.682 94.6345 163.682 121.399C163.682 148.164 185.379 169.861 212.144 169.861Z" fill="#402A80"/>
                        <path id="Ellipse 49" d="M262.83 158.317C266.888 157.237 267.39 145.882 263.951 132.954C260.511 120.027 254.433 110.423 250.375 111.502C246.317 112.582 245.815 123.937 249.254 136.864C252.693 149.792 258.771 159.396 262.83 158.317Z" fill="#402A80"/>
                        <path id="Path 226" d="M213.766 137.318C222.666 137.318 231.005 131.655 231.005 136.398C231.005 141.141 222.663 154.498 213.766 154.498C204.869 154.498 194.074 142.065 194.074 137.322C194.074 132.579 204.868 137.318 213.766 137.318Z" fill="white"/>
                        <path id="Ellipse 42" d="M214.442 121.503C223.589 121.503 231.005 114.088 231.005 104.94C231.005 95.7928 223.589 88.3773 214.442 88.3773C205.294 88.3773 197.879 95.7928 197.879 104.94C197.879 114.088 205.294 121.503 214.442 121.503Z" fill="white"/>
                        <path id="Ellipse 43" d="M218.327 101.803C216.164 99.6416 212.671 99.6308 210.524 101.779C208.378 103.927 208.392 107.42 210.556 109.582C212.719 111.743 216.212 111.754 218.358 109.606C220.505 107.458 220.491 103.964 218.327 101.803Z" fill="#3F3D56"/>
                        <path id="hat" d="M211.081 65.4051C200.528 65.2983 193.135 63.3521 193.232 53.7909C193.329 44.2298 201.963 36.5657 212.515 36.6727C223.067 36.7797 231.545 44.6173 231.448 54.1774C231.351 63.7376 221.634 65.5117 211.081 65.4051Z" fill="#402A80"/>
                    </g>
                </g>
            </svg>

        </div>
    </div>
    <!-- svg container-->

    <!-- content -->
    <div class="container d-flex justify-content-center content mb-5">
        <div class="col d-flex align-content-center flex-wrap text-center">
            <div class="col">
                <h1 class="main-color mb-5">مرحبا يا صديقي</h1>
                <h2 class="main-color">سأساعدك في تحديد مستقبلك والوصول الى مسارك المهني</h2>
            </div>

        </div>

    </div>
    <!-- content -->

    <!-- btn -->
    <div class="container d-flex justify-content-center text-center ">
        <button type="button" class="btn btn-primary btn-rounded c-btn ps-5 pe-5 pt-2 pb-2 btn-block fa-2x  bg-main-color"><span class="fa-2x">   <a href="{{route('users.genderview')}}">يلا</a></span></button>
    </div>
    <!-- btn -->
</div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="{{asset('node_modules/mdb-ui-kit/js/mdb.min.js')}} js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
