<?php
declare(strict_types=1);
/*
  Created on : 11 abr. de 2022, 09:37:24
  Author: Leonardo G. Tellez Saucedo
 */

class Amplifier{
    
    /* Estas propiedades son los relaciones M:N con las demas clases */
    private $tuner;
    private $dvdPlayer;
    private $cdPlayer;
    private $dvd;
    private $cd;
    
    public function on(){
       echo 'Top-O-Line Amplifier on</br>';
    }
    
    public function off(){
        echo 'Top-O-Line Amplifier off</br>';
    }
    
    public function setCd($cd){
        $this->cd = $cd;
        echo 'Top-O-Line Cd set</br>';
    }
    
    public function setDvd(){    
        echo 'Top-O-Line Dvd set</br>';
    }
    
    
    public function setStereoSound(){
        echo 'Top-O-Line Stereo Sound set</br>';
    }
    
    public function setSurroundSound(){
        echo 'Top-O-Line Surround sound set</br>';
    }
    
    public function setTuner(){
        echo 'Top-O-Line Tuner set</br>';
    }

    public function setVolume($vol){
        echo 'Top-O-Line Volume set to: '.$vol.'</br>';
    }
    
}//End class Amplifier

class Tuner{
    private Amplifier $amplifier;   //Relacion M:N con Amplifier
    private $frequency;
    private $activated=FALSE;
    private $Modulation='FM';
    
    public function on(){
        $this->activated = TRUE;
        echo 'Top-O-Line Tuner on</br>';
    }
    
    public function off(){
        $this->activated = FALSE;
        echo 'Top-O-Line Tuner off</br>';
    }    
    
    public function setAm(){
        $this->Modulation = 'AM';
        echo 'Top-O-Line Tuner in AM mode</br>';
    }
    
    public function setFm(){
        $this->Modulation = 'FM';
        echo 'Top-O-Line Tuner in FM mode</br>';
    }
    
    
    public function setFrequency($frequency){
        $this->frequency = $frequency;
        echo 'Top-O-Line Tuner frequency set to: '.$frequency.'</br>';
    }
    
}//end class Tunner


class DvdPlayer{
    private Amplifier $amplifier;//Relacion M:N con Amplifier
    private $activated = FALSE;
    private $state = 'stoped';
    private $audio = 'two_channels';
    private $movie;
    
    public function on(){
        $this->activated = TRUE;
        echo 'Top-O-Line Dvd player on</br>';
    }
    
    public function off(){
        $this->activated = FALSE;
        echo 'Top-O-Line Dvd player off</br>';
    }
    
    public function eject(){
        $this->state = 'eject';
        echo 'Top-O-Line Dvd player eject</br>';
       
    }
    
    public function pause(){
        $this->state = 'paused';
        echo 'Top-O-Line Dvd paused</br>';
    }
    
    public function play($movie){
        $this->state = 'playing';
        $this->movie = $movie;
        echo 'Top-O-Line Dvd playing: "'.$movie.'"</br>';
    }
    
    public function setSurroundAudio(){
       $this->audio = 'surround';
              
    }
    
    public function setTwoChannelAudio(){
        $this->audio = 'two_channels';
        echo 'Top-O-Line Dvd set to two channels audio</br>';
    }
    
    public function stop(){
        $this->state = 'stopped';
        echo 'Top-O-Line Dvd stopped</br>';
    }

    
    
}//end class DvdPlayer

class CdPlayer{ 
    private Amplifier $amplifier;//Relacion M:N con Amplifier
    private $activated = FALSE;
    private $state = 'stoped';

    
    public function on(){
        $this->activated = TRUE;
        echo 'Top-O-Line Cd player on</br>';
    }
    
    public function off(){
        $this->activated = FALSE;
        echo 'Top-O-Line Cd player off</br>';
    }
    
    public function eject(){
        $this->state = 'eject';
        echo 'Top-O-Line Cd player ejecting</br>';
    }
    
    public function pause(){
        $this->state = 'paused';
        echo 'Top-O-Line Cd player paused</br>';
    }
    
    public function play(){
        $this->state = 'playing';
        echo 'Top-O-Line Cd player playing</br>';
    }
    
    public function stop(){
        $this->state = 'stopped';
        echo 'Top-O-Line Cd player stopped</br>';
    }
    
}//end class CdPlayer


class Projector{
    
    private DvdPlayer $dvdPlayer; //Relación 1:N con dvdPlayer   
    private $state = 'stoped';
    private $mode = 'tvMode';
    
    

    
    public function on(){
        $this->activated = TRUE;
        echo 'Top-O-Line Projector on</br>';
    }
    
    public function off(){
        $this->activated = FALSE;
        echo 'Top-O-Line Projector off</br>';
    }
    
    public function tvMode(){
        $this->mode = 'tvMode';
        echo 'Top-O-Line Projector tv mode set</br>';
    }
    
    public function wideScreenMode(){
        $this->mode = 'wideScreenMode';
        echo 'Top-O-Line Projector in widescreen mode (16x9 aspect ratio)</br>';
    }
        
}//end class Projector

class TheaterLights{


    private $intensity = 5;

    
    public function on(){
        echo 'Top-O-Line Lights on</br>';
    }
    
    public function off(){
        echo 'Top-O-Line Lights off</br>';
    }    
    
    public function dim($intensity){
        $this->intensity = $intensity;
        echo 'Top-O-Line Ligths dimming to: '.$this->intensity.'%</br>';
    }
    
    
    
}


class Screen{
    
    private $state='down';
    
    public function up(){
        
        $this->state = 'up';
        echo 'Top-O-Line Screen up</br>';
    }
    
    
    public function down(){
        
        $this->state = 'down';
        echo 'Top-O-Line Screen down</br>';
        
    }
    
    
    
}//end class Screen

class PopcornPopper{
    
    private $state = 'off';
    

    
    public function on(){
        $this->state = 'on';
        echo 'Top-O-Line Popcorn Popper on</br>';
        
    }
    
    public function off(){
        $this->state = 'off';
        echo 'Top-O-Line Popcorn Popcorn Popper off</br>';
    }
    
    public  function pop(){
        $this->state = 'pop';
        echo 'Top-O-Line Popcorn Popcorn Popper popping</br>';
    }

}//end class PopcornPopper






class HomeTheaterFacade{
    
    private Amplifier $amp;
    private Tuner $tuner;
    private DvdPlayer $dvd;
    private CdPlayer $cd;
    private Projector $projector;
    private TheaterLights $lights;
    private Screen $screen;
    private PopcornPopper $popper;
    
    public function __construct( Amplifier $amp,
    Tuner $tuner,
    DvdPlayer $dvd,
    CdPlayer $cd,
    Projector $projector,
    TheaterLights $lights,
    Screen $screen,
    PopcornPopper $popper){
        
        $this->amp =$amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
        
    }
    
    
    
    
    public function watchMovie($movie){
    
    
        echo 'Get ready to watch a movie...</br>';
        
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd();
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }
    
    public function endMovie(){
        echo 'Shutting movie theater down...</br>';
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->off();
        $this->dvd->eject();
        $this->dvd->off();
    }
       
    
}//end class HomeTheaterFacade



$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer();
$projector = new Projector();
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();


$hometheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $lights, $screen, $popper);



$hometheater->watchMovie("Raiders of the Lost Arc");
$hometheater->endMovie();







