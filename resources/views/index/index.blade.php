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
   <div class="row">
     <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="img/thumb-small01.png" alt=""></a>
       <h3><a href="#">Curabitur vel nunc venenatis metus </a></h3>
       <p>This will be the description or something I guess. hasellus imperdiet nulla eu fermentum finibus. Nullam interdum ut lectus at dapibus.</p>
        <a href="#" class="btn">Saiba Mais</a>
     </div>
     <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small02.png"><img src="img/thumb-small02.png" alt=""></a>
       <h3><a href="#">Phasellus massa nunc, molestie.</a></h3>
       <p>This will be the description or something I guess. I don't know. Your choice.</p>
       <a href="#" class="btn">Saiba Mais</a> </div>
   </div>
   <div class="row">
     <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small01.png"><img src="img/thumb-small01.png" alt=""></a>
       <h3><a href="#">Integer feugiat lorem lectus, at pulvinar lacus imperdiet at.</a></h3>
       <p>This will be the description or something I guess. I don't know. Your choice.</p>
       <a href="#" class="btn">Saiba Mais</a> </div>
     <div class="span6 thumb-list"> <a rel="lightbox" href="img/thumb-small02.png"><img src="img/thumb-small02.png" alt=""></a>
       <h3><a href="#">Etiam bibendum lobortis velit sit amet laoreet.</a></h3>
       <p>This will be the description or something I guess. I don't know. Your choice.</p>
       <a href="#" class="btn">Saiba Mais</a> </div>
   </div>
   <hr>
@endsection
