<div>
    <div class="container" style="padding: 30 px  0;">
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heeding">
                                    <div class="row">
                                            <div class="col-md-6">
                                                Add Slide
                                            </div>
                                    <div class="col-md-6">
                        <a href="{{route('admin.homeSlide')}}" class="btn btn-success pull-right">All Slides</a>
                    </div>
                 </div>
             </div>

             <div class="panel-body">
                 <form class="form-horizontal" wire:submit.prevent="addSlide">
                     @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                     @endif
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Title</label>
                         <div class="col-md-4">
                            <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" >
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="" class="col-md-4 control-label">Subtitle</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Price" class="form-control input-md" wire:model="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Link</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Link" class="form-control input-md" wire:model="link">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Image</label>
                        <div class="col-md-4">
                            <input type="file"  class="input-file" wire:model="image">
                            @if ($image)
                                <img src="{{$image->temporaryUrl()}}" width="120">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label" >Status</label>
                        <div class="col-md-4">
                           <select class="form-ontrol">
                               <option value="0">Inactive</option>
                               <option value="1">Active</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                 </form>
             </div>
         </div>
     </div>
    </div>
    </div>
</div>
