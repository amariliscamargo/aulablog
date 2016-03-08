@extends('layout.app')
@section('content')
   <div class="row">
     <div class="span4">
       <h3>Deep Sky<small> por <a href="#">Amarilis Camargo</a></small></h3>
       <a rel="lightbox" href="img/thumb1.jpg"><img src="img/thumb1.jpg" alt=""></a> </div>
     <div class="span4">
       <h3>Nature's Valley<small> por <a href="#">Amarilis Camargo</a></small></h3>
       <a rel="lightbox" href="img/thumb2.jpg"><img src="img/thumb2.jpg" alt=""></a> </div>
     <div class="span4">
       <h3>Saiba Mais</h3>
       <blockquote>Phasellus eu vehicula ante. Phasellus massa nunc, molestie non nisi nec, fermentum vehicula nibh. Praesent tempor eros eu orci tincidunt, id varius orci rutrum. Nunc risus lectus, hendrerit eget imperdiet ut, condimentum a lectus. Sed venenatis in urna ac tristique<br>
         <br>
         <em>- AmarilisCamargo.com</em> </blockquote>
       <p><a class="btn" href="#">Todas as Categorias &raquo;</a></p>
     </div>
   </div>
   <!--Start second row of columns-->
   <hr>
   <?php $conta = 0; ?>
   @foreach($posts as $post)
      @if($conta%2 == 0)
        <div class="row">
      @endif
     <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="img/thumb-small01.png" alt=""></a>
      <h3><a href="#">{{ $post->title }}</a></h3>
      <h6>({{$post->created_at}})</h6>
       <p>{{ $post->content }}</p>
       <h3>Comentários</h3>
       <!--Chamando os comentários por relacionamento-->
        @foreach($post->comments as $comment)
          <b>Nome: {{$comment->nome}}</b>
          <p>Comentário: {{$comment->comment}}</p>
        @endforeach
        <h4><b>Tags:</b></h4>
          <ul>
          @foreach($post->tags as $tag)
            <li>{{$tag->name}}</li>
          @endforeach
          </ul>
       <!--<a href="#" class="btn">Saiba Mais</a>-->
       </div>
       @if($conta%2 == 1)
        </div>
       @endif
     <?php $conta ++; ?>
   @endforeach
@endsection
