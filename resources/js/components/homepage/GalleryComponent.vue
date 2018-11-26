<style>
  
#gallery{
  -webkit-column-count:4;
  -moz-column-count:4;
  column-count:4;
  
  -webkit-column-gap:20px;
  -moz-column-gap:20px;
  column-gap:20px;
}
@media (max-width:1200px){
  #gallery{
  -webkit-column-count:3;
  -moz-column-count:3;
  column-count:3;
    
  -webkit-column-gap:20px;
  -moz-column-gap:20px;
  column-gap:20px;
}
}
@media (max-width:800px){
  #gallery{
  -webkit-column-count:2;
  -moz-column-count:2;
  column-count:2;
    
  -webkit-column-gap:20px;
  -moz-column-gap:20px;
  column-gap:20px;
}
}
@media (max-width:600px){
  #gallery{
  -webkit-column-count:1;
  -moz-column-count:1;
  column-count:1;
}  
}
.card{
  width:100%;
  height:auto;
  margin: 4% auto;
  box-shadow:-3px 5px 15px #000;
  cursor: pointer;
}
.modal-img,.model-vid{
  width:100%;
  height:auto;
}
.modal-body{
  padding:0px;
}
</style>

<template>
    <div>
        <h1>Responsive Image Gallery</h1><hr>
<div id="gallery" class="container-fluid">  
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">

  <img src="https://i.ytimg.com/vi/TZiQK81Rjfw/maxresdefault.jpg" class="card img-responsive"></button>
  <img src="http://www.fwallpaper.net/wallpapers/H/I/hilary-duff-portrait_1920x1200.jpg" class="card img-responsive">
   <img src="http://delbaz.persiangig.com/image/Portraits/Matt-Sayles-portrait-shot-in-Beverly-HillsNov-8-2008-kristen-stewart-2823602-1845-2560.jpg" class="card img-responsive">
 
  <img src="http://wallpaper.pickywallpapers.com/1680x1050/megan-fox-white-portrait.jpg" class="card img-responsive">
  <img src="http://cdn1.ouchpress.com/media/celebrities/12/megan-fox-21638.jpg" class="card img-responsive">
  <img src="https://pixabay.com/static/uploads/photo/2016/04/10/13/52/portrait-1319951_960_720.jpg" class="card img-responsive">
  <img src="http://hd.wallpaperswide.com/thumbs/megan_fox_portrait-t2.jpg" class="card img-responsive">
  <img src="http://trends4ever.com/wp-content/uploads/2013/10/Kristen-Stewart-new-style.jpg" class="card img-responsive">
  <img src="http://wallpaper.pickywallpapers.com/1920x1080/emma-watson-floral-shirt-portrait.jpg" class="card img-responsive">
  <img src="http://cdn1.ouchpress.com/media/celebrities/162/katie-holmes-12392.jpg" class="card img-responsive">
  <img src="http://hdwallpaperbackgrounds.net/wp-content/uploads/2015/08/beautiful-blue-eyes-girls-desktop-wallpapers.jpg" class="card img-responsive">
  <img src="http://wallpaperology.com/zombie/8509154-green-eyed-supermodel-1920x1080.jpg" class="card img-responsive">
  <img src="http://www.wallpaperup.com/uploads/wallpapers/2014/03/14/297856/big_thumb_341038e62add7648def03c52e3ae124b.jpg" class="card img-responsive">
  <img src="http://images-cdn.moviepilot.com/image/upload/v1426602042/kristen-stewart-want-s-to-be-part-of-captain-america-jpeg-227119.jpg" class="card img-responsive">
  <img src="http://www.imagefully.com/wp-content/uploads/2015/10/Beautiful-Green-Eyes-Awesome-Photo.jpg" class="card img-responsive">
  <!--<img src="" class="card img-responsive">-->

</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
         <img src="https://i.ytimg.com/vi/TZiQK81Rjfw/maxresdefault.jpg" class="card img-responsive">
      </div>
    </div>

  </div>
</div>
    </div>
</template>

<script>
 
export default {
        
}
</script>
<!-- Button trigger modal -->
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Modal title/h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Add rows here
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>