@extends('frontend.layouts.master')
@section('title')
    Contact || {{'Makbul Portfolio'}}
@endsection
@section('content')
<div id="chatApp">
    <div class="usersChatList">
      <div class="card">
        <a @click="expandChatList()">
        <div class="card-header">
          <p class="card-header-title">
            <span class="tag is-primary">2</span>&nbsp;
         Chats Ativos
        </p>
        </div>
        </a>
        <div id="userListBox" class="card-content thumb-user-list" :class="{show: showChatList}">
          <article class="media" @click="showUsuario('123')">
            <figure class="media-left">
              <p class="image is-32x32">
                <img src="http://bulma.io/images/placeholders/32x32.png">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Barbara Middleton</strong>
                  <br>
                </p>
              </div>
            </div>
          </article>
          <article class="media">
            <figure class="media-left">
              <p class="image is-32x32">
                <img src="http://bulma.io/images/placeholders/32x32.png">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Jonathan Cales</strong>
                  <br>
                </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div class="chatBox" id="chatBox">
      <div class="card">
     
     <header class="card-header header-title" @click="toggleChat()">
        <p class="card-header-title">
          {{-- <i class="fa fa-circle is-online"></i><img src="https://k0.okccdn.com/php/load_okc_image.php/images/32x0/971x939/0/10846088441021659030.webp?v=2" style="width: 30px;">&nbsp;{{headUser}} --}}
        </p>
        <a class="card-header-icon">
          <span class="icon">
            <i class="fa fa-close"></i>
          </span>
        </a>
      </header>
     
     <div id="chatbox-area">
      <div class="card-content chat-content">
        <div class="content">
          <div class="chat-message-group">
            <div class="chat-thumb">
              <figure class="image is-32x32">
                <img src="https://k0.okccdn.com/php/load_okc_image.php/images/32x0/971x939/0/10846088441021659030.webp?v=2">
              </figure>
            </div>
            <div class="chat-messages">
              <div class="message">Olá meu nome é Camila</div>
              <div class="from">Hoje 04:55</div>
            </div>
          </div>
          <div class="chat-message-group writer-user">
            <div class="chat-messages">
              <div class="message">Olá meu nome é Marinho</div>
              <div class="from">Hoje 04:55</div>
            </div>
          </div>
          <div class="chat-message-group">
            <div class="chat-thumb">
              <figure class="image is-32x32">
                <img src="https://k0.okccdn.com/php/load_okc_image.php/images/32x0/971x939/0/10846088441021659030.webp?v=2">
              </figure>
            </div>
            <div class="chat-messages">
              <div class="message">Olá meu nome é Marinho</div>
              <div class="message">Caro marinho</div>
              <div class="from">Hoje 04:55</div>
            </div>
          </div>
          <div class="chat-message-group">
            <div class="typing">Typing</div>
            <div class="spinner">
                  <div class="bounce1"></div>
                  <div class="bounce2"></div>
                  <div class="bounce3"></div>
             </div>
          </div>
        </div>
      </div>
      <footer class="card-footer" id="chatBox-textbox">
        <div style="width: 63%">
          <textarea id="chatTextarea" class="chat-textarea" placeholder="Digite aqui" v-on:focus="expandTextArea()" v-on:blur="dexpandTetArea()"></textarea>
        </div>
        <div class="has-text-centered" style="width: 37%">
          <a class="button is-white">
            <i class="fa fa-smile-o fa-5" aria-hidden="true"></i>
          </a>
        <a class="button is-white">send</a></div>
      </footer>
      </div>
    </div>
    </div>
    <div class="emojiBox" style="display: none">
      <div class="box">
      
      </div>
    </div>
    
    </div>
@endsection
    