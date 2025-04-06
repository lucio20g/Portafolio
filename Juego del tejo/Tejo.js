//pantalla
let widthWindow = 1000;
let heightWindow = widthWindow*0.399;
//x e y jugador 1
let player1X;
let player1Y;
//x e y jugador 2
let player2X;
let player2Y;
//x e y ball
let ballX;
let ballY;
//estado pelota
let stateBallX;
let stateBallY;

//acumulador de impacto
let ac_conteoA = 0;
let ac_conteoS = 0;
let ac_conteoD = 0;
let ac_conteoW = 0;

let ac_conteoUP = 0;
let ac_conteoDOWN = 0;
let ac_conteoLEFT = 0;
let ac_conteoRIGHT = 0;

//estado de teclas
let A = false;
let S = false;
let D = false;
let W = false;

let bt_LEFT = false;
let bt_RIGHT = false;
let bt_UP = false;
let bt_DOWN = false;

//botones presionados
let botones_presionados_j1 = 0;
let botones_presionados_j2 = 0;

//cronometro
let tiempo;

//sonido de bola
let soundBall

//tamaño de los jugadores
let jugador1 = widthWindow/14;
let jugador2 = widthWindow/14;
let ball = widthWindow/28;

//velocidad de jugadores 
let velocidadJugadores = widthWindow/87.5;

//velocidad de la pelota
let setVelocidad = widthWindow/466.6;//hasta donde queremos que disminuya la velocidad de juego
let velocidadInicial = widthWindow/140;
let velocidadPelotaX = velocidadInicial;
let velocidadPelotaY = velocidadInicial;
let setVelocidadMaxima = widthWindow/23.3;

//rozamiento con la mesa de juego 
let mesa_rozamiento = 0.08;

//puntajes
let punt1;
let punt2;
let go=true;
let z;
let z2
 
//imagenes juego
let rgb;
let ballimg;
let p1img;
let p2img;
let mesaimg;
let fondo;
let fondo2;
let select;


function preload() {
  soundGame = loadSound('soundGame.mp3');
  soundBall = loadSound('soundBall.mp3');
  select=0;
  if (select == 0){
    rgb=255;
    p1img = loadImage("mazo_azul.png");
    p2img = loadImage("mazo_rojo.png");
    mesaimg = loadImage("mesa_tejo3.png");
    ballimg = loadImage("disco8.png");
  }else if (select == 0){
    rgb=0;
    p1img = loadImage("mazo-set1.png");
    p2img = loadImage("mazo-set2.png");
    mesaimg = loadImage("mesadetejo.jpg");
    ballimg = loadImage("disco3.png");
  }else{
    
  }
  fondo = loadImage("win1.jpeg");
  fondo2 = loadImage("win2.jpeg");
}


function setup() {
  soundGame.setLoop(true); 
  soundGame.play(); 
  createCanvas(widthWindow-10, heightWindow-10);
  player1X = jugador1;
  player1Y = (heightWindow-10)/2;
  player2X = (widthWindow-10)-jugador2;
  player2Y = (heightWindow-10)/2;
  ballX = (widthWindow-10)/2;
  ballY = (heightWindow-10)/2;
  stateBallX = "move_right";
  stateBallY = "move_top";
  punt1 = 0;
  punt2 = 0;
  z = widthWindow;
  z2 = widthWindow;
  preload();
}

function draw() {
  //background(color('#5404FF'));
  punt();
  if (go){
    movePlayers();
    impactBall();
    limitUsers();
    mesaRozamiento();
    moveBall();
    velocidadMaxima();
    images();
  }
  image(fondo,z,0,widthWindow,heightWindow);
  image(fondo2,z2,0,widthWindow,heightWindow);
}


function time() {
  tiempo = m();
  console.log(tiempo);
}

function movePlayers() {
  //Tecla "A"
  if (keyIsDown(65)) {
    ac_conteoA++;
    player1X -= velocidadJugadores;
    botones_presionados_j1++;
    A = true;
  }else{
    A = false;
    ac_conteoA = 0;
    botones_presionados_j1--;
  }
  //Tecla "D"
  if (keyIsDown(68)) {
    player1X += velocidadJugadores;
    ac_conteoD++;
    botones_presionados_j1++;
    D = true;
  }else{
    D = false;
    ac_conteoD = 0;
    botones_presionados_j1--;
  }
  //Tecla "W"
  if (keyIsDown(87)) {
    player1Y -= velocidadJugadores;
    ac_conteoW++;
    botones_presionados_j1++;
    W = true;
  }else{
    W = false;
    ac_conteoW = 0;
    botones_presionados_j1--;
  }
  //Tecla "S"
  if (keyIsDown(83)) {
    player1Y += velocidadJugadores;
    ac_conteoS++;
    botones_presionados_j1++;
    S = true;
  }else{
    S = false;
    ac_conteoS = 0;
    botones_presionados_j1--;
}
  //Tecla "flecha izquierda"
  if (keyIsDown(LEFT_ARROW)) {
    player2X -= velocidadJugadores;
    ac_conteoLEFT++;
    botones_presionados_j2++;
    bt_LEFT = true;
  }else{
    bt_LEFT = false;
    ac_conteoLEFT = 0;
    botones_presionados_j2--;
  }
  //Tecla "flecha derecha"
  if (keyIsDown(RIGHT_ARROW)) {
    player2X += velocidadJugadores;
    ac_conteoRIGHT++;
    botones_presionados_j2++;
    bt_RIGHT = true;
  }else{
    bt_RIGHT = false;
    ac_conteoRIGHT = 0;
    botones_presionados_j2--;
  }
  //Tecla "flecha arriba"
  if (keyIsDown(UP_ARROW)) {
    player2Y -= velocidadJugadores;
    ac_conteoUP++;
    botones_presionados_j2++;
    bt_UP =true;
  }else{
    bt_UP = false;
    ac_conteoUP = 0;
    botones_presionados_j2--;
  }
  //Tecla "flecha abajo"
  if (keyIsDown(DOWN_ARROW)) {
    player2Y += velocidadJugadores;
    ac_conteoDOWN++;
    botones_presionados_j2++;
    bt_DOWN = true;
  }else{
    bt_DOWN = false;
    ac_conteoDOWN = 0;
    botones_presionados_j2--;
  }
  
  if(botones_presionados_j1 > 1){
  if(!(((A && W)||(A && S))||((S && D)||(W && D)))){
    ac_conteoA = 0;
    ac_conteoS = 0;
    ac_conteoD = 0;
    ac_conteoW = 0;    
  }
  }
  if(botones_presionados_j2 > 1){
  if(!(((bt_LEFT && bt_DOWN)||(bt_LEFT && bt_UP))||((bt_RIGHT && bt_DOWN)||(bt_RIGHT && bt_UP)))){
    ac_conteoUP = 0;
    ac_conteoDOWN = 0;
    ac_conteoLEFT = 0;
    ac_conteoRIGHT = 0;    
  }
  }

}

function moveBall() {
  // Actualizar la posición de la pelota según la velocidad actual
  ballX += velocidadPelotaX;
  ballY += velocidadPelotaY;

  // Controlar los rebotes en los laterales de la pantalla
  if (ballX <= (ball / 2) || ballX >= widthWindow - (ball / 2)) {
    // Calcular el ángulo de incidencia en relación con la vertical
    let anguloIncidencia = atan2(velocidadPelotaY, velocidadPelotaX);

    // Calcular el ángulo de refracción en relación con la vertical
    let anguloReflexion = PI - anguloIncidencia;

    // Calcular las nuevas componentes de velocidad
    velocidadPelotaX = velocidadInicial * cos(anguloReflexion);
    velocidadPelotaY = velocidadInicial * sin(anguloReflexion);

    // Ajustar la posición para evitar que la pelota quede atrapada en los laterales
    if (ballX <= (ball / 2)) {
      ballX = (ball / 2) + 1;
    } else {
      ballX = widthWindow - (ball / 2) - 1;
    }
  }

  // Controlar los rebotes en la parte superior e inferior de la pantalla
  if (ballY <= (ball / 2) || ballY >= heightWindow - (ball / 2)) {
    // Calcular el ángulo de incidencia en relación con la horizontal
    let anguloIncidencia = atan2(velocidadPelotaY, velocidadPelotaX);

    // Calcular el ángulo de refracción en relación con la horizontal
    let anguloReflexion = -anguloIncidencia;

    // Calcular las nuevas componentes de velocidad
    velocidadPelotaX = velocidadInicial * cos(anguloReflexion);
    velocidadPelotaY = velocidadInicial * sin(anguloReflexion);

    // Ajustar la posición para evitar que la pelota quede atrapada en la parte superior o inferior
    if (ballY <= (ball / 2)) {
      ballY = (ball / 2) + 1;
    } else {
      ballY = heightWindow - (ball / 2) - 1;
    }
  }
}




function impactBall() {
  // Impacto pelota con jugador 1
  let dist1 = dist(player1X, player1Y, ballX, ballY);
  if (dist1 < (jugador1 / 2) + (ball / 2)) {
    velocidadInicial += round((ac_conteoA+ac_conteoS+ac_conteoD+ac_conteoW)/4);
    if (soundBall.isLoaded()) {
      soundBall.play();
    }
    // Calcular el ángulo de incidencia en relación con el jugador 1
    let anguloIncidencia = atan2(ballY - player1Y, ballX - player1X);

    // Reflejar la dirección de la pelota respecto al jugador 1
    velocidadPelotaX = velocidadInicial * cos(anguloIncidencia);
    velocidadPelotaY = velocidadInicial * sin(anguloIncidencia);

    // Mover la pelota fuera del jugador 1 para evitar que quede atrapada
    let distanciaAPush = ((jugador1 / 2) + (ball / 2)) - dist1;
    ballX += distanciaAPush * cos(anguloIncidencia);
    ballY += distanciaAPush * sin(anguloIncidencia);
  }

  // Impacto pelota con jugador 2
  let dist2 = dist(player2X, player2Y, ballX, ballY);
  if (dist2 < (jugador2 / 2) + (ball / 2)) {
    velocidadInicial += round((ac_conteoLEFT+ac_conteoRIGHT+ac_conteoUP+ac_conteoDOWN)/4);
    if (soundBall.isLoaded()) {
      soundBall.play();
    }
    // Calcular el ángulo de incidencia en relación con el jugador 2
    let anguloIncidencia = atan2(ballY - player2Y, ballX - player2X);

    // Reflejar la dirección de la pelota respecto al jugador 2
    velocidadPelotaX = velocidadInicial * cos(anguloIncidencia);
    velocidadPelotaY = velocidadInicial * sin(anguloIncidencia);

    // Mover la pelota fuera del jugador 2 para evitar que quede atrapada
    let distanciaAPush = ((jugador2 / 2) + (ball / 2)) - dist2;
    ballX += distanciaAPush * cos(anguloIncidencia);
    ballY += distanciaAPush * sin(anguloIncidencia);
  }
}


//limite de jugador 1 y jugador 2
function limitUsers() {
  if (player1X <= jugador1/2) {
    player1X += velocidadJugadores;
    ac_conteoA = 0;
  }
  if (player1X >= widthWindow/2-jugador1/2) {
    player1X -= velocidadJugadores;
    ac_conteoD = 0;
  }
  if (player1Y <= jugador1/2) {
    player1Y += velocidadJugadores;
    ac_conteoW = 0;
  }
  if (player1Y >= heightWindow-jugador1/2) {
    player1Y -= velocidadJugadores;
    ac_conteoS = 0;
  }

  if (player2X <= widthWindow/2+jugador2/2) {
    player2X += velocidadJugadores;
    ac_conteoLEFT = 0;
  }

  if (player2X >= widthWindow-jugador2/2) {
    player2X -= velocidadJugadores;
    ac_conteoRIGHT = 0;
  }

  if (player2Y <= jugador2/2) {
    player2Y += velocidadJugadores;
    ac_conteoUP = 0;
  }

  if (player2Y >= heightWindow-jugador2/2) {
    player2Y -= velocidadJugadores;
    ac_conteoDOWN = 0;
  }
}

function mesaRozamiento(){
  if(velocidadInicial > setVelocidad){
    let reguladorDeValor =setVelocidad - mesa_rozamiento; 
    if(reguladorDeValor <= 0){
      velocidadInicial = setVelocidad; 
    }else{
      velocidadInicial -= mesa_rozamiento;
    }
  }
}

function velocidadMaxima(){
  if(velocidadInicial > setVelocidadMaxima){
      velocidadInicial = setVelocidadMaxima; 
  }
}

function images(){
  image(mesaimg,0,0,widthWindow,heightWindow);
  textSize(widthWindow/6);
  fill(rgb);
  text(punt1,widthWindow*0.15,heightWindow*0.6);
  text(punt2,widthWindow*0.75,heightWindow*0.6);
  image(ballimg,ballX-ball/2,ballY-ball/2,ball,ball);
  image(p1img,player1X-jugador1/2,player1Y-jugador1/2,jugador1,jugador1);
  image(p2img,player2X-jugador1/2,player2Y-jugador1/2,jugador1,jugador1);
}
function punt(){
  if (ballY>heightWindow*0.19 && ballY<heightWindow*0.81){
    if (ballX-(ball/2)<widthWindow*0.01 || ballX+(ball/2)>widthWindow-(widthWindow*0.01)){
      if (ballX-(ball/2)<widthWindow*0.01){
        punt2 += 1; 
        ballX = widthWindow/4; 
      }else{
        punt1 += 1;
        ballX = widthWindow*0.75;
      }
      ballY = heightWindow/2;
      velocidadPelotaX = 0;
      velocidadPelotaY = 0;
      player1X = jugador1;
      player1Y = heightWindow/2;
      player2X = widthWindow-jugador2;
      player2Y = heightWindow/2;
    }
  }
  if (punt1 == 7){
    go = false;
    z=0;
  }
  if (punt2 == 7){
    go = false;
    z2=0;
  }
  if (keyIsDown(82) && go==false) {
    go=true;
    z=widthWindow;
    z2=widthWindow
    punt1=0;
    punt2=0;
  }
}
