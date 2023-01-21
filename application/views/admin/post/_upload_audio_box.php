<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo trans('audios'); ?>
                <small class="small-title"><?php echo trans("audios_exp"); ?></small>
            </h3>
        </div>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="form-group m-0">
            <div class="row">
                <div class="col-sm-12 m-b-10">
                    <a class='btn btn-sm bg-purple' data-toggle="modal" data-target="#file_manager_audio">
                        <?php echo trans('select_audio'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 post-selected-files-container">
                <div id="post_audio_list" class="post-selected-files">

                    <?php if (!empty($post)):
                        $audios = get_post_audios($post->id);
                        if (!empty($audios)):
                            foreach ($audios as $audio): ?>
                                <div id="post_selected_audio_<?php echo $audio->post_audio_id; ?>" class="item">
                                    <div class="left">
                                        <i class="fa fa-music"></i>
                                    </div>
                                    <div class="center">
                                        <span><?php echo $audio->audio_name; ?></span>
                                    </div>
                                    <div class="right">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-selected-file-list-item btn-delete-selected-audio-database" data-value="<?php echo $audio->post_audio_id; ?>"><i class="fa fa-times"></i></a></p>
                                    </div>
                                </div>
                            <?php endforeach;
                        else: ?>
                            <span class="play-list-empty"><?php echo trans('play_list_empty'); ?></span>
                        <?php endif;
                    endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
