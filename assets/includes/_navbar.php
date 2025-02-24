<!-- NAVBAR -->
<header>
  <div class="header-container">
    <div id="menu-button" class="button-left">
      <div class="burger-menu"><span></span><span></span><span></span></div>
      <span data-modal="#main-menu" id="modal-button">menu</span>
    </div>
    <a href="/" class="logo">
      <img src="assets/img/black.png" alt="logo" class="logo-full" />
      <img src="assets/img/ico_black.png" alt="icone" class="logo-icon" />
    </a>

    <div class="button-right">
      <?php
      if (!empty($_SESSION) && isset($_SESSION)) {
        echo '<a href="espace-perso" class="btn btn-white">Espace perso</a>';
      } else {
        echo '<a href="connexion" class="btn btn-white">Connexion</a>';
      }
      ?>
    </div>
  </div>
</header>

<!-- NAVBAR on landing -->
<div class="landing-header">
  <div class="landing-header-container">
    <div id="menu-button" class="landing-button-left">
      <div class="burger-menu"><span></span><span></span><span></span></div>
      <span data-modal="#main-menu" id="modal-button">menu</span>
    </div>

    <a href="./" class="landing-logo">
      <svg id="logo-full" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 746.41 76.03">
        <defs>
          <style>
            .cls-2 {
              opacity: 0.4;
            }

            .cls-1 {
              opacity: 1;
            }
          </style>
        </defs>
        <g id="Calque_1-2" data-name="Calque 1">
          <circle class="cls-2" cx="2.51" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="2.51" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="2.51" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="2.51" cy="73.43" r="2.51" />
          <circle class="cls-2" cx="16.56" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="16.56" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="16.56" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="16.56" cy="73.43" r="2.51" />
          <circle class="cls-2" cx="30.61" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="30.61" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="30.61" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="30.61" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="44.66" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="44.66" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="44.66" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="44.66" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="58.71" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="58.71" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="58.71" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="58.71" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="72.76" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="72.76" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="72.76" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="72.76" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="86.81" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="86.81" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="86.81" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="86.81" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="100.87" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="100.87" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="100.87" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="100.87" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="114.92" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="128.97" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="143.02" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="157.07" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="171.12" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="185.17" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="199.22" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="213.27" cy="73.52" r="2.51" />
          <circle class="cls-2" cx="114.92" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="128.97" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="143.02" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="157.07" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="171.12" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="185.17" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="199.22" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="213.27" cy="27.85" r="2.51" />
          <circle class="cls-2" cx="114.92" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="114.92" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="128.97" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="128.97" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="143.02" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="143.02" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="157.07" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="157.07" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="171.12" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="171.12" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="185.17" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="185.17" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="199.22" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="199.22" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="213.27" cy="43.07" r="2.51" />
          <circle class="cls-2" cx="213.27" cy="58.29" r="2.51" />
          <circle class="cls-2" cx="519.09" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="519.09" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="519.09" cy="32.87" r="2.51" />
          <circle class="cls-2" cx="533.14" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="533.14" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="533.14" cy="32.87" r="2.51" />
          <circle class="cls-2" cx="547.2" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="547.2" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="547.2" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="561.25" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="561.25" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="561.25" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="575.3" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="575.3" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="575.3" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="589.35" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="589.35" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="589.35" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="603.4" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="603.4" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="603.4" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="617.45" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="617.45" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="617.45" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="631.5" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="645.55" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="659.6" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="673.65" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="687.7" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="701.75" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="715.81" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="729.86" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="631.5" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="631.5" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="645.55" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="645.55" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="659.6" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="659.6" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="673.65" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="673.65" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="687.7" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="687.7" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="701.75" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="701.75" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="715.81" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="715.81" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="729.86" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="729.86" cy="17.73" r="2.51" />
          <circle class="cls-2" cx="743.9" cy="32.95" r="2.51" />
          <circle class="cls-2" cx="743.9" cy="2.51" r="2.51" />
          <circle class="cls-2" cx="743.9" cy="17.73" r="2.51" />
          <g>
            <path class="cls-1" d="M76.4,36.96c-.26,1.04-.61,2.04-1.08,3-1.05,2.16-2.52,4.04-4.41,5.63-1.89,1.59-4.12,2.85-6.68,3.77-2.57,.92-5.42,1.38-8.55,1.38-3.08,0-5.9-.46-8.47-1.38-2.57-.92-4.81-2.16-6.72-3.73-1.92-1.57-3.38-3.44-4.37-5.63-.32-.7-.57-1.42-.78-2.15l-12.65,.28c.4,2.22,1.05,4.34,1.97,6.37,1.62,3.56,3.94,6.67,6.97,9.32,3.02,2.65,6.57,4.71,10.65,6.2,4.08,1.48,8.57,2.23,13.49,2.23,4.86,0,9.33-.74,13.41-2.23,4.08-1.48,7.61-3.55,10.61-6.2,3-2.65,5.32-5.75,6.97-9.32,1.14-2.46,1.87-5.07,2.22-7.81l-12.57,.27Z" />
            <path class="cls-1" d="M31.62,32.98c0-2.59,.5-4.97,1.5-7.13,1-2.16,2.46-4.02,4.37-5.59,1.92-1.57,4.16-2.81,6.72-3.73,2.56-.92,5.39-1.38,8.47-1.38,3.13,0,5.98,.46,8.55,1.38,2.56,.92,4.79,2.17,6.68,3.77,1.89,1.59,3.36,3.47,4.41,5.63,1.05,2.16,1.58,4.51,1.58,7.05,0,1.41-.18,2.75-.5,4.04l12.57-.27c.16-1.23,.25-2.48,.25-3.77,0-4.16-.82-8.02-2.47-11.58-1.65-3.56-3.97-6.67-6.97-9.32-3-2.65-6.54-4.71-10.61-6.2-4.08-1.48-8.57-2.23-13.49-2.23-4.86,0-9.33,.74-13.41,2.23-4.08,1.49-7.61,3.55-10.61,6.2-3,2.65-5.32,5.75-6.97,9.32-1.65,3.56-2.47,7.43-2.47,11.58,0,1.79,.16,3.53,.46,5.21l12.65-.28c-.46-1.57-.71-3.21-.71-4.94Z" />
            <path class="cls-1" d="M128.88,35.81l13.34-.29,10.12-.22c.91-.93,1.73-1.95,2.44-3.05,1.81-2.81,2.72-6,2.72-9.56s-.84-6.6-2.52-9.28c-1.67-2.67-4.01-4.78-7-6.32-3-1.54-6.5-2.31-10.49-2.31h-30.79v31.51l22.15-.48m15.04-8.3c-.81,1.27-1.91,2.27-3.28,2.99-1.38,.73-2.91,1.1-4.58,1.1h-17.58V15.33h17.09c1.73,0,3.34,.32,4.82,.97,1.49,.65,2.65,1.56,3.49,2.75,.83,1.19,1.25,2.59,1.25,4.21s-.4,2.99-1.21,4.26Z" />
            <path class="cls-1" d="M163.58,61.52l-14.34-.09-13.99-20h-13.79v20h-11.75v-25.19l22.14-.49,13.37-.29,10.13-.22c-1.4,1.43-3.02,2.66-4.89,3.67-.68,.38-1.39,.7-2.11,.99l15.23,21.62Z" />
            <path class="cls-1" d="M225.73,33.71l-12.63,.27-3.02-6.5c-.49-1.08-.97-2.18-1.46-3.28-.49-1.11-.94-2.23-1.38-3.37-.35-.91-.68-1.82-1.01-2.72-.37,.96-.75,1.91-1.13,2.85-.46,1.1-.93,2.21-1.42,3.32-.49,1.1-1,2.25-1.54,3.44l-3.06,6.57-12.42,.27,13.86-29.77h11.83l13.38,28.92Z" />
            <polygon class="cls-1" points="241.59 61.43 228.87 61.43 223.61 50.09 194.7 50.09 189.42 61.43 177.11 61.43 189.66 34.5 202.08 34.22 199.22 40.37 219.1 40.37 216.1 33.92 228.73 33.64 241.59 61.43" />
            <path class="cls-1" d="M297.16,31.65c-2.27-1.16-4.85-2.07-7.74-2.71-2.89-.65-5.9-1.22-9.03-1.7-1.89-.22-3.71-.5-5.47-.85-1.76-.35-3.31-.77-4.66-1.26-1.35-.49-2.43-1.13-3.24-1.94-.81-.81-1.21-1.81-1.21-3,0-1.3,.54-2.4,1.62-3.32,1.08-.92,2.54-1.61,4.37-2.07,1.83-.46,3.94-.69,6.32-.69,2.21,0,4.39,.27,6.52,.81,2.13,.54,4.16,1.31,6.08,2.31,1.92,1,3.61,2.26,5.06,3.77l6.72-8.34c-1.51-1.78-3.44-3.35-5.79-4.7-2.35-1.35-5.05-2.4-8.1-3.16-3.05-.76-6.47-1.13-10.25-1.13-3.51,0-6.79,.39-9.84,1.17-3.05,.78-5.75,1.93-8.1,3.44-2.35,1.51-4.17,3.36-5.47,5.55-1.3,2.19-1.94,4.63-1.94,7.33,0,2.48,.53,4.71,1.58,6.68,1.05,1.97,2.56,3.63,4.54,4.98,.08,.05,.17,.1,.25,.15l38.62-.84c-.28-.16-.54-.34-.83-.49Z" />
            <path class="cls-1" d="M300.98,32.07l-38.62,.84c1.92,1.28,4.21,2.37,6.88,3.25,2.78,.92,5.98,1.62,9.6,2.11,1.46,.22,2.93,.42,4.41,.61,1.48,.19,2.93,.43,4.33,.73,1.4,.3,2.63,.69,3.69,1.17,1.05,.49,1.89,1.08,2.51,1.78,.62,.7,.93,1.54,.93,2.51,0,1.62-.64,2.93-1.9,3.93-1.27,1-2.85,1.73-4.74,2.19-1.89,.46-3.84,.69-5.83,.69-3.89,0-7.74-.73-11.54-2.19-3.81-1.46-7.55-3.89-11.22-7.29l-6.48,9.48c2.27,2.16,4.82,4.01,7.66,5.55,2.83,1.54,5.97,2.73,9.4,3.56,3.43,.84,7.25,1.26,11.46,1.26,5.08,0,9.56-.74,13.45-2.23,3.89-1.48,6.94-3.62,9.15-6.4,2.21-2.78,3.32-6.12,3.32-10,0-2.97-.65-5.43-1.94-7.37-1.13-1.69-2.65-3.07-4.52-4.17Z" />
            <polygon class="cls-1" points="350.86 15.65 364.47 15.65 364.47 4.79 325.18 4.79 325.18 15.65 338.71 15.65 338.71 31.25 350.86 30.98 350.86 15.65" />
            <polygon class="cls-1" points="353.86 30.92 341.71 31.18 341.71 50.58 328.18 50.58 328.18 61.43 367.47 61.43 367.47 50.58 353.86 50.58 353.86 30.92" />
            <path class="cls-1" d="M423.65,28.93c-2.89-.65-5.9-1.22-9.03-1.7-1.89-.22-3.71-.5-5.47-.85-1.76-.35-3.31-.77-4.66-1.26-1.35-.49-2.43-1.13-3.24-1.94-.81-.81-1.21-1.81-1.21-3,0-1.3,.54-2.4,1.62-3.32,1.08-.92,2.54-1.61,4.37-2.07,1.83-.46,3.94-.69,6.32-.69,2.21,0,4.39,.27,6.52,.81,2.13,.54,4.16,1.31,6.08,2.31,1.92,1,3.6,2.26,5.06,3.77l6.72-8.34c-1.51-1.78-3.44-3.35-5.79-4.7-2.35-1.35-5.05-2.4-8.1-3.16-3.05-.76-6.47-1.13-10.25-1.13-3.51,0-6.79,.39-9.84,1.17-3.05,.78-5.75,1.93-8.1,3.44-2.35,1.51-4.17,3.36-5.47,5.55-1.3,2.19-1.94,4.63-1.94,7.33,0,2.48,.53,4.71,1.58,6.68,.44,.82,.97,1.57,1.57,2.28l34.95-.76c-.55-.15-1.11-.3-1.68-.43Z" />
            <path class="cls-1" d="M434.38,31.58c-1.82-.93-3.84-1.69-6.06-2.29l-34.95,.76c.84,1,1.82,1.91,2.97,2.7,1.97,1.35,4.35,2.48,7.13,3.4,2.78,.92,5.98,1.62,9.6,2.11,1.46,.22,2.93,.42,4.41,.61,1.49,.19,2.93,.43,4.33,.73,1.4,.3,2.63,.69,3.69,1.17,1.05,.49,1.89,1.08,2.51,1.78,.62,.7,.93,1.54,.93,2.51,0,1.62-.64,2.93-1.9,3.93-1.27,1-2.85,1.73-4.74,2.19-1.89,.46-3.83,.69-5.83,.69-3.89,0-7.74-.73-11.54-2.19s-7.55-3.89-11.22-7.29l-6.48,9.48c2.27,2.16,4.82,4.01,7.65,5.55,2.83,1.54,5.97,2.73,9.4,3.56,3.43,.84,7.25,1.26,11.46,1.26,5.08,0,9.56-.74,13.45-2.23,3.89-1.48,6.94-3.62,9.15-6.4,2.21-2.78,3.32-6.12,3.32-10,0-2.97-.65-5.43-1.94-7.37-1.3-1.94-3.08-3.5-5.35-4.66Z" />
            <path class="cls-1" d="M532.03,24.64c.57-1.67,.85-3.37,.85-5.1,0-3.08-.78-5.8-2.35-8.18-1.57-2.38-3.77-4.25-6.6-5.63-2.83-1.38-6.14-2.07-9.92-2.07-3.67,0-7.06,.65-10.17,1.94-3.11,1.3-5.83,3.07-8.18,5.31-2.35,2.24-4.36,4.79-6.04,7.65l8.99,5.43c1.3-2.27,2.71-4.1,4.25-5.51,1.54-1.4,3.13-2.42,4.78-3.04,1.65-.62,3.31-.93,4.98-.93,1.78,0,3.27,.26,4.46,.77,1.19,.51,2.09,1.26,2.71,2.23,.62,.97,.93,2.13,.93,3.48,0,1.24-.41,2.58-1.22,4.01-.44,.77-.95,1.55-1.51,2.34l13.02-.28c.39-.8,.73-1.6,1-2.42Z" />
            <path class="cls-1" d="M538.24,50.5v10.94h-42.13s-2.91-7.54-2.91-7.54l17.57-15.96c1.46-1.4,2.96-2.83,4.5-4.29,1.54-1.46,2.93-2.92,4.17-4.38,.57-.66,1.09-1.33,1.57-1.99l13.02-.29c-.41,.84-.88,1.67-1.42,2.49-1.06,1.59-2.26,3.14-3.61,4.66-1.35,1.51-2.79,3.02-4.33,4.53-1.54,1.51-3.09,3-4.66,4.46l-8.1,7.37h26.33Z" />
            <path class="cls-1" d="M590.7,25.76c.5,2.17,.76,4.6,.76,7.32,0,5.99-1.24,10.61-3.73,13.85-2.48,3.24-6.02,4.86-10.61,4.86-4.7,0-8.36-1.62-10.98-4.86-2.62-3.24-3.93-7.86-3.93-13.85,0-2.47,.23-4.71,.66-6.72l-11.78,.26c-.31,2.04-.46,4.19-.46,6.46,0,5.83,1.01,10.92,3.04,15.27,2.03,4.35,5.01,7.75,8.95,10.21,3.94,2.46,8.78,3.69,14.5,3.69,5.62,0,10.37-1.23,14.26-3.69,3.89-2.46,6.82-5.86,8.79-10.21,1.97-4.35,2.96-9.44,2.96-15.27,0-2.69-.22-5.21-.64-7.58l-11.79,.26Z" />
            <path class="cls-1" d="M563.14,19.05c2.62-3.29,6.28-4.94,10.98-4.94,4.59,0,8.13,1.65,10.61,4.94,1.37,1.82,2.35,4.09,2.97,6.77l11.79-.26c-.49-2.78-1.26-5.34-2.32-7.69-1.97-4.35-4.9-7.75-8.79-10.21-3.89-2.46-8.64-3.69-14.26-3.69-5.72,0-10.56,1.23-14.5,3.69-3.94,2.46-6.93,5.86-8.95,10.21-1.24,2.66-2.09,5.6-2.57,8.81l11.78-.26c.63-2.95,1.71-5.42,3.27-7.38Z" />
            <path class="cls-1" d="M656.09,19.54c0-3.08-.78-5.8-2.35-8.18-1.57-2.38-3.77-4.25-6.6-5.63-2.83-1.38-6.14-2.07-9.92-2.07-3.67,0-7.06,.65-10.17,1.94-3.11,1.3-5.83,3.07-8.18,5.31-2.35,2.24-4.36,4.79-6.04,7.65l8.99,5.43c1.3-2.27,2.71-4.1,4.25-5.51,1.54-1.4,3.13-2.42,4.78-3.04,1.65-.62,3.31-.93,4.98-.93,1.78,0,3.27,.26,4.46,.77,1.19,.51,2.09,1.26,2.71,2.23,.62,.97,.93,2.13,.93,3.48,0,1.13-.35,2.34-1.02,3.62l12.41-.27c.5-1.58,.76-3.18,.76-4.81Z" />
            <path class="cls-1" d="M661.45,50.5v10.94h-42.13l-2.91-7.54,17.58-15.96c1.46-1.4,2.95-2.83,4.49-4.29,1.54-1.46,2.93-2.92,4.17-4.37,1.25-1.46,2.27-2.91,3.08-4.34,.08-.13,.13-.26,.2-.38l12.4-.27c-.03,.09-.05,.19-.08,.29-.57,1.67-1.38,3.31-2.43,4.9-1.05,1.59-2.26,3.14-3.61,4.66-1.35,1.51-2.79,3.02-4.33,4.53s-3.09,3-4.66,4.46l-8.1,7.37h26.33Z" />
            <polygon class="cls-1" points="716.04 10.95 703 23.31 690.87 23.58 699.68 15.2 673.84 14.92 673.84 4.47 713.78 4.47 716.04 10.95" />
            <polygon class="cls-1" points="702.19 12.81 699.67 15.2 703.48 15.24 702.19 12.81" />
            <path class="cls-1" d="M697.53,25.83c-1.32,.14-2.31,.31-2.96,.53l2.75,5.1,6.06-5.74c-.63-.06-1.28-.09-1.93-.09-1.3,0-2.61,.07-3.93,.2Z" />
            <path class="cls-1" d="M720.42,42.72c0,3.89-1.07,7.31-3.2,10.25s-4.99,5.23-8.59,6.85c-3.59,1.62-7.6,2.43-12.03,2.43-5.4,0-9.99-1.12-13.77-3.37-3.78-2.24-7.02-5.3-9.72-9.19l8.91-6.48c1.03,1.4,2.24,2.79,3.65,4.17,1.4,1.38,3.01,2.5,4.82,3.36,1.81,.87,3.82,1.3,6.03,1.3s4.2-.31,6.12-.93,3.48-1.6,4.7-2.92c1.21-1.32,1.82-3.01,1.82-5.06,0-1.89-.55-3.42-1.66-4.58s-2.51-2-4.21-2.51c-1.7-.51-3.42-.77-5.15-.77-.97,0-1.91,.05-2.83,.16-.92,.11-1.77,.27-2.55,.49-.79,.21-1.5,.48-2.15,.81l-3.32-6.97,6.58-6.25,12.13-.26-2.61,2.47c1.83,.16,3.58,.56,5.24,1.21,2.25,.86,4.27,2.06,6.08,3.6,1.81,1.54,3.21,3.35,4.21,5.43,1,2.08,1.5,4.33,1.5,6.76Z" />
          </g>
        </g>
      </svg>
      <svg id="logo-icon" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 109.27 109.67">
        <defs>
          <style>
            .cls-2 {
              opacity: 0.36;
            }
          </style>
        </defs>
        <g id="Calque_1-2" data-name="Calque 1">
          <g class="cls-2">
            <circle class="cls-1" cx="14.45" cy="14.45" r="14.45" transform="translate(-4.43 6.63) rotate(-22.5)" />
            <circle class="cls-1" cx="55.17" cy="14.45" r="14.45" />
            <circle class="cls-1" cx="94.82" cy="14.45" r="14.45" />
            <circle class="cls-1" cx="14.45" cy="54.84" r="14.45" transform="translate(-19.88 9.7) rotate(-22.5)" />
            <circle class="cls-1" cx="55.17" cy="54.84" r="14.45" transform="translate(-16.79 25.29) rotate(-22.5)" />
            <circle class="cls-1" cx="94.82" cy="54.84" r="14.45" />
            <circle class="cls-1" cx="14.45" cy="95.22" r="14.45" />
            <circle class="cls-1" cx="55.17" cy="95.22" r="14.45" />
            <circle class="cls-1" cx="94.82" cy="95.22" r="14.45" />
          </g>
          <path class="cls-1" d="m86.55,61.17c-.4,1.45-.92,2.86-1.61,4.2-1.55,3.01-3.68,5.61-6.4,7.8-2.71,2.19-5.89,3.89-9.54,5.1-3.65,1.22-7.68,1.78-12.09,1.68-4.34-.09-8.3-.83-11.89-2.2-3.59-1.37-6.71-3.19-9.36-5.46-2.66-2.27-4.65-4.96-5.99-8.07-.43-.99-.76-2.02-1.04-3.06H10.79c.49,3.14,1.34,6.16,2.58,9.04,2.17,5.07,5.35,9.52,9.53,13.35,4.18,3.82,9.12,6.85,14.83,9.06,5.7,2.22,12.02,3.4,18.95,3.55,6.85.15,13.17-.76,18.97-2.73,5.79-1.97,10.84-4.77,15.15-8.41,4.31-3.64,7.67-7.94,10.11-12.92,1.68-3.44,2.8-7.09,3.38-10.95h-17.73Z" />
          <path class="cls-1" d="m23.54,54.19c.08-3.65.86-6.99,2.33-10,1.47-3.01,3.59-5.6,6.34-7.75,2.75-2.15,5.95-3.83,9.59-5.05,3.64-1.22,7.64-1.78,11.98-1.68,4.41.1,8.42.83,12.01,2.2,3.59,1.37,6.69,3.21,9.31,5.52,2.61,2.3,4.63,5,6.05,8.07,1.42,3.08,2.09,6.41,2.01,9.98-.04,1.98-.34,3.87-.83,5.68h17.73c.26-1.73.42-3.49.46-5.31.13-5.86-.92-11.33-3.13-16.41-2.21-5.08-5.39-9.52-9.54-13.35-4.14-3.82-9.07-6.84-14.77-9.06-5.7-2.22-12.02-3.4-18.95-3.56-6.85-.15-13.18.76-18.97,2.73-5.79,1.97-10.84,4.77-15.15,8.41-4.31,3.64-7.68,7.94-10.11,12.92-2.43,4.97-3.71,10.39-3.84,16.25-.06,2.53.12,4.98.49,7.36h17.84c-.61-2.22-.91-4.54-.86-6.98Z" />
        </g>
      </svg>
    </a>

    <div class="landing-button-right">
      <?php
      if (!empty($_SESSION) && isset($_SESSION)) {
        echo '<a href="espace-perso" class="btn btn-white">Espace perso</a>';
      } else {
        echo '<a href="connexion" class="btn btn-white">Connexion</a>';
      }
      ?>
    </div>
  </div>
</div>

<!-- MENU ONCE NAV TOGGLED -->
<div class="navbar-menu">
  <div class="navbar-menu__container">
    <div class="navbar-menu__left">
      <div class="navbar-menu__left__item">
        <h2>L'événement</h2>
        <a href="./#programme">Le programme</a>
        <a href="comite">Comités</a>
        <a href="articles">Les articles</a>
        <a href="activite">Les activités</a>

      </div>
      <div class="navbar-menu__left__item">
        <h2>Informations</h2>
        <a href="plan-dacces">Informations d'accés</a>
        <a href="tarifs">Logement/Tarifs</a>
        <a href="contact">Contact</a>
      </div>
      <div class="navbar-menu__left__item">
        <h2> <?php
              if (!empty($_SESSION) && isset($_SESSION)) {
                echo 'Mon compte';
              } else {
                echo 'Adhérer';
              }
              ?></h2>
        <?php
        if (!empty($_SESSION) && isset($_SESSION)) {
          echo '<a href="espace-perso">Espace perso</a>';
        } else {
          echo '<a href="connexion">Se connecter</a>
          <a href="inscription">S\'inscrire</a>';
        }
        ?>
        <a href="http://www.afrif.asso.fr/?page_id=64" target="_blank">Adhérer à l'AFRIF</a>
      </div>
      <?php
      if (!empty($_SESSION) && isset($_SESSION) && in_array($_SESSION['role'], [2, 3])) {
      ?>
        <div class="navbar-menu__left__item">
          <h2>Auteur</h2>
          <a href="espace-perso">Espace perso</a>
          <a href="depot-article">Soummetre un article</a>
          <a href="discussion-auteurs">Discussion avec les auteurs</a>
        </div>
      <?php
      }
      ?>


    </div>
    <div class="navbar-menu__right">
      <div class="fast-links">
        <h2>Accès rapide</h2>
        <ul>
          <li>
            <a href="connexion" class="btn btn-blue"> Connexion </a>
          </li>
          <li>
            <a href="inscription" class="btn btn-blue"> Inscription </a>
          </li>
          <li>
            <a href="espace-perso" class="btn btn-blue"> Espace perso </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>