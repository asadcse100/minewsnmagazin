<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('All Posts')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <li class="list-item"><a href="#"><?php echo e(__('User Dashboard')); ?></a></li>
    <li class="list-item"><a href="#"><?php echo e(__('All Post')); ?></a></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/custom-dashboard.css')); ?>">
 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.datatable.css','data' => []]); ?>
<?php $component->withName('datatable.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.css','data' => []]); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<style>
    .table-wrap .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        padding: 3px 7px;
    }

    .table-wrap .btn-info {
        padding: 3px 7px;
    }

    .table-wrap .alert-primary {
        padding: 6px 8px;
    }

    .dashboard-form-wrapper .form-control {
        padding: 5px 15px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>

    <div class="dashboard-form-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="header-wrap d-flex flex-wrap justify-content-between">
                                <div class="left-content">
                                    <h4 class="header-title"><?php echo e(__('All Blog Items')); ?></h4>
                                </div>
                                <div class="header-title d-flex mb-4">
                                    <div class="btn-wrapper-inner custom-front-control">
                                        <form action="<?php echo e(route('user.blog')); ?>" method="get" id="langauge_change_select_get_form">
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.lang.frontend-lang-select','data' => ['name' => 'lang','selected' => $default_lang,'id' => 'langchange']]); ?>
<?php $component->withName('lang.frontend-lang-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('lang'),'selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($default_lang),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('langchange')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </form>
                                             <a href="<?php echo e(route('user.blog.new')); ?>" class="btn btn-info"> <?php echo e(__('Add New')); ?></a>
                                             <a href="<?php echo e(route('user.blog.trashed')); ?>" class="btn btn-danger"> <?php echo e(__('Trashed Blogs')); ?></a>

                                    </div>
                                </div>
                             </div>
                                  <div class="table-wrap table-responsive">
                                    <table class="table table-default" id="all_blog_table">
                                        <thead>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Information')); ?></th>
                                        <th><?php echo e(__('Image')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $all_user_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($data->id); ?></td>
                                                <td><?php echo e($data->getTranslation('title',$default_lang,true)); ?></td>
                                                <td>
                                                    <ul>
                                                        <li></li>
                                                        <li><?php echo e(__('Author :')); ?><?php echo e($data->author); ?></li>
                                                        <li><?php echo e(__(' Date : ')); ?> <?php echo e(date_format($data->created_at,'d-M-Y')); ?></li>
                                                        <li><?php echo e(__(' Category : ')); ?>

                                                            <?php
                                                                $colors = ['text-primary','text-danger','text-success','text-info','text-dark']
                                                            ?>
                                                            <?php $__currentLoopData = $data->category_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php $comma = !$loop->last ? ' | ' : ' '; ?>
                                                                <span class="<?php echo e($colors[random_int(0,4)]); ?>"><?php echo e($cat->getTranslation('title',$default_lang,true) .$comma); ?></span>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                  <?php
                                                       $blog_img = get_attachment_image_by_id($data->image,null,true);
                                                   ?>
                                                   <?php if(!empty($blog_img)): ?>
                                                       <div class="attachment-preview">
                                                           <div class="thumbnail">
                                                               <div class="centered">
                                                                   <img class="avatar user-thumb" src="<?php echo e($blog_img['img_url']); ?>" alt="">
                                                               </div>
                                                           </div>
                                                       </div>
                                                   <?php endif; ?>
                                                </td>

                                                <td>
                                                   <div class="mt-2">
                                                       <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.status-span','data' => ['status' => $data->status]]); ?>
<?php $component->withName('status-span'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                   </div>
                                                </td>

                                                <td>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.delete-popover-all-lang','data' => ['type' => 'lineawesome','url' => route('user.blog.delete.all.lang',$data->id)]]); ?>
<?php $component->withName('delete-popover-all-lang'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('lineawesome'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('user.blog.delete.all.lang',$data->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                                    <a class="btn btn-lg btn-primary btn-sm mb-3 mr-1" href="<?php echo e(route('user.blog.edit',$data->id).'?lang='.$default_lang); ?>">
                                                        <i class="las la-edit"></i>
                                                    </a>
                                                    <form action="<?php echo e(route('user.blog.clone')); ?>" method="post" style="display: inline-block">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="item_id" value="<?php echo e($data->id); ?>">
                                                        <button type="submit" title="clone this to new draft" class="btn btn-xs btn-secondary btn-sm mb-3 mr-1"><i class="las la-copy"></i></button>
                                                    </form>

                                                    <a class="btn btn-info btn-xs mb-3 mr-1" target="_blank" href="<?php echo e(route('frontend.blog.single',$data->slug)); ?>">
                                                      <i class="las la-eye"></i>
                                                    </a>

                                                   <?php if(!empty($data->comment_status)): ?>
                                                    <a class="btn btn-warning btn-xs mb-3 mr-1" target="_blank" href="<?php echo e(route('user.blog.comments',$data->id)); ?>">
                                                       <?php echo e(__('View Comments')); ?> (<?php echo e(count($data->comments)); ?>)
                                                    </a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                             </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.datatable.js','data' => []]); ?>
<?php $component->withName('datatable.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.js','data' => []]); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script>
        (function ($){
            "use strict";
            $(document).ready(function () {
                $(document).on('change','#langchange',function(e){
                    $('#langauge_change_select_get_form').trigger('submit');
                });

                $(document).on('click','.swal_delete_all_lang_data_button',function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: '<?php echo e(__("Are you sure?")); ?>',
                        text: '<?php echo e(__("It will delete All language data..!")); ?>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                    });
                });
            });
        })(jQuery)
    </script>


    <script>

        $(document).on('click','.mobile-nav-click', function (e){
            e.preventDefault()
            $('.nav-pills-open').toggleClass('active');
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.user.dashboard.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Server\htdocs\newsnmagazin\@core\resources\views/frontend/user/dashboard/user-post/index.blade.php ENDPATH**/ ?>