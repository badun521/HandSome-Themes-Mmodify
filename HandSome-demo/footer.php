<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php Content::outputCommentJS($this, $this->security); ?>
</div>
<!-- /content -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right hidden-xs">
      <?php $this->options->BottomInfo(); ?>
      Theme by <a target="blank" href="https://www.ihewro.com/archives/489/">handsome</a>|
      Theme Modify By&nbsp;<a href="https://lolicm.com">Zero</a>
      </span>
      &copy;&nbsp;2017-2018 Copyright&nbsp;<?php $this->options->BottomleftInfo(); ?>
    </div>
      <!--希望保留版权信息，谢谢-->
      <?php if (@in_array('showSettingsButton',$this->options->featuresetup)): ?>
      <script type="text/template" id="tmpl-customizer">
          <div class="settings panel panel-default setting_body_panel" aria-hidden="true">
              <button class="btn btn-default no-shadow pos-abt" data-toggle="tooltip" data-placement="left" data-original-title="<?php _me("设置") ?>" data-toggle-class=".settings=active, .settings-icon=animate-spin">
                  <i class="fa fa-gear settings-icon"></i>
              </button>
              <div class="panel-heading">
                  <button class="pull-right btn btn-xs btn-rounded btn-danger" name="reset" data-toggle="tooltip" data-placement="top" data-original-title="<?php _me("恢复默认值") ?>" ><?php _me("重置") ?></button>
                  <?php _me("设置") ?>		</div>
              <div class="setting_body">
              <div class="panel-body">
                  <# for ( var keys = _.keys( data.sections.settings ), i = 0, name; keys.length > i; ++i ) { #>
                      <div<# if ( i !== ( keys.length - 1 ) ) print( ' class="m-b-sm"' ); #>>
                          <label class="i-switch bg-info pull-right">
                              <input type="checkbox" name="{{ keys[i] }}" value="1"<# if ( data.defaults[keys[i]] ) print( ' checked="checked"' ); #> />
                                  <i></i>
                          </label>
                          {{ data.sections.settings[keys[i]] }}
              </div>
              <# } #>
          </div>
          <div class="wrapper b-t b-light bg-light lter r-b">
              <div class="row row-sm">
                  <div class="col-xs-6">
                      <#
                              _.each( data.sections.colors, function( color, i ) {
                              var newColumnBefore = ( i % 7 ) === 6;
                              #>
                          <label class="i-checks block<# if ( !newColumnBefore ) print( ' m-b-sm' ); #>">
                              <input type="radio" name="color" value="{{ i }}"<# if ( data.defaults['color'] === i ) print( ' checked="checked"' ); #> />
                                  <span class="block bg-light clearfix pos-rlt">
								<span class="active pos-abt w-full h-full bg-black-opacity text-center">
									<i class="fa fa-check text-md text-white m-t-xs"></i>
								</span>
								<b class="{{ color.navbarHeader }} header"></b>
								<b class="{{ color.navbarCollapse }} header"></b>
								<b class="{{ color.aside.replace( ' b-r', '' ) }}"></b>
							</span>
                          </label>
                          <#
                                  if ( newColumnBefore && ( i + 1 ) < data.sections.colors.length )
                          print( '</div><div class="col-xs-6">' );
                              } );
                              #>
                          </div>
                  </div>
              </div>
          </div>
          </div>
      </script>
      <?php endif; ?>


      <div class="back-to-top" style="top: -999px;">
      </div>
      
      <div class="topButton panel panel-default">
          <button id="goToTop" class="btn btn-default no-shadow pos-abt hide">
              <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
          </button>
      </div>
  </footer>
  </div><!--end of .app app-header-fixed-->

<?php $this->footer(); ?>

    <!--定义全局变量-->
    <script type="text/javascript">
        window['LocalConst'] = {
            COMMENT_NAME_INFO: '<?php _me("必须填写昵称或姓名")?>',
            COMMENT_EMAIL_INFO: '<?php _me("必须填写电子邮箱地址") ?>',
            COMMENT_EMAIL_LEGAL_INFO: '<?php _me("邮箱地址不合法") ?>',
            COMMENT_CONTENT_INFO: '<?php _me("必须填写评论内容") ?>',
            COMMENT_SUBMIT_ERROR: '<?php _me("提交失败，请重试！") ?>',
            COMMENT_CONTENT_LEGAL_INFO: '<?php _me("提交失败,您的输入内容不符合规则！") ?>',

            LOGIN_USERNAME_INFO: '<?php _me("必须填写用户名") ?>',
            LOGIN_PASSWORD_INFO: '<?php _me("请填写密码") ?>',
            LOGIN_SUBMIT_ERROR: '<?php _me("登录失败，请重新登录") ?>',
            LOGIN_SUBMIT_INFO: '<?php _me("用户名或者密码错误，请重试") ?>',
            LOGIN_SUBMIT_SUCCESS: '<?php _me("登录成功") ?>',
            LOGOUT_SUCCESS_REFRESH: '<?php _me("退出成功，正在刷新当前页面") ?>',

            LOGOUT_ERROR: '<?php _me("退出失败，请重试") ?>',
            LOGOUT_SUCCESS: '<?php _me("退出成功") ?>',

            SUBMIT_PASSWORD_INFO: '<?php _me("密码错误，请重试") ?>',
            COMMENT_TITLE: '<?php _me("评论通知") ?>',
            LOGIN_TITLE: '<?php _me("登录通知") ?>',
            ChANGYAN_APP_KEY: '<?php $this->options->ChangyanAppKey() ?>',
            CHANGYAN_CONF: '<?php $this->options->ChangyanConf() ?>',

            COMMENT_SYSTEM: '<?php echo COMMENT_SYSTEM; ?>',
            COMMENT_SYSTEM_ROOT: '<?php echo Handsome_Config::COMMENT_SYSTEM_ROOT; ?>',
            COMMENT_SYSTEM_CHANGYAN: '<?php echo Handsome_Config::COMMENT_SYSTEM_CHANGYAN; ?>',
            COMMENT_SYSTEM_OTHERS: '<?php echo Handsome_Config::COMMENT_SYSTEM_OTHERS; ?>',
            EMOJI: '<?php _me('表情') ?>',
            IS_PJAX: '<?php echo PJAX_ENABLED ?>',
            IS_PAJX_COMMENT: '<?php echo PJAX_COMMENT_ENABLED; ?>',
            BASE_SCRIPT_URL: '<?php echo THEME_URL; ?>',
            THEME_COLOR: '<?php $this->options->themetype(); ?>',
            THEME_HEADER_FIX: '<?php echo in_array('header-fix', $this->options->indexsetup) ? true : false; ?>',
            THEME_ASIDE_FIX: '<?php echo in_array('aside-fix', $this->options->indexsetup) ? true : false; ?>',
            THEME_ASIDE_FOLDED: '<?php echo in_array('aside-folded', $this->options->indexsetup) ? true : false; ?>',
            THEME_ASIDE_DOCK: '<?php echo in_array('aside-dock', $this->options->indexsetup) ? true : false; ?>',
            THEME_CONTAINER_BOX: '<?php echo in_array('container-box', $this->options->indexsetup) ? true : false; ?>',
            THEME_HIGHLIGHT_CODE: '<?php echo in_array('hightlightcode', $this->options->featuresetup); ?>',
            THEME_TOC: '<?php echo IS_TOC; ?>',
            TOC_TITLE: '<?php _me('文章目录'); ?>',
            HEADER_FIX: '<?php _me("固定头部") ?>',
            ASIDE_FIX: '<?php _me("固定导航") ?>',
            ASIDE_FOLDED: '<?php _me("折叠导航") ?>',
            ASIDE_DOCK: '<?php _me("置顶导航") ?>',
            CONTAINER_BOX: '<?php _me("盒子模型") ?>',
            OFF_SCROLL_HEIGHT: '<?php echo (!in_array('header-fix', $this->options->indexsetup)) ? 0 : (in_array('aside-dock', $this->options->indexsetup) ? 115 : 50) ; ?>',
            COMMENT_REJECT_PLACEHOLDER: '<?php _me('居然什么也不说，哼'); ?>',
            COMMENT_PLACEHOLDER: '<?php _me('说点什么吧……') ?>',
            SHOW_SETTING_BUTTON: '<?php echo in_array('showSettingsButton', $this->options->featuresetup) ? true :
                false; ?>',
            THEME_VERSION: '<?php echo Handsome::$version . Handsome::$versionTag ?>'
        };

        window.paceOptions = {
            document: false,
            ajax: false,
            restartOnRequestAfter: false,
        }
    </script>



<!--CDN加载-->
<?php $PUBLIC_CDN_ARRAY = unserialize(PUBLIC_CDN); ?>
<script src="<?php echo $PUBLIC_CDN_ARRAY['js']['bootstrap'] ?>"></script>


<?php if (PJAX_ENABLED): ?>
    <script src="<?php echo STATIC_PATH;?>js/features/jquery.pjax.min.js" type="text/javascript"></script>
    <script>
        $(document).pjax('a[href^="<?php echo $this->options->rootUrl.'/'; ?>"]:not(a[target="_blank"], a[no-pjax])', {
            container: '#content',
            fragment: '#content',
            timeout: 8000
        }).on('pjax:click', function() {
            window['Page'].doPJAXClickAction();
            <?php if($this->options->pjaxAnimate == "default"): ?>
            $("#loadingbar").attr("class","butterbar active");
            <?php endif;?>

            <?php if ($this->options->isPjaxToTop == '0'): ?>
            $('body,html').animate({scrollTop:0},<?php $this->options->toTopSpeed(); ?>);
            <?php endif; ?>

        }).on('pjax:complete', function() {
            window['Page'].doPJAXCompleteAction();

            <?php if($this->options->pjaxAnimate == "default"): ?>
            $("#loadingbar").attr("class","butterbar hide");
            <?php endif;?>

            <?php $this->options->ChangeAction(); ?>
            <?php if (@in_array('mathJax',$this->options->featuresetup)): ?>
            MathJax.Hub.Queue(["Typeset",MathJax.Hub,"body"]);
            <?php endif; ?>
        })
    </script>
<?php endif; ?>


<!--主题组件js加载-->

<!--pjax动画组件-->
<?php if($this->options->pjaxAnimate !== "default"): ?>
    <script src="<?php echo THEME_URL ?>assets/js/features/pace.min.js"></script>

    <link href="<?php echo THEME_URL ?>assets/css/features/pjax/pace-theme-<?php $this->options->pjaxAnimate ()?>.css" rel="stylesheet">

    <?php if (trim($this->options->progressColor) !== ""): ?>
        <style>
            <?php if ($this->options->isPjaxShowMatte == '0'): ?>
            .pace-running #content,.pace-running #aside{
                opacity: 0.4;
            }

            .pace-done #content,.pace-done #aside{
                opacity: 1;
            }
            <?php endif; ?>
            <?php echo Content::returnPjaxAnimateCss(); ?>
        </style>
    <?php endif; ?>
<?php endif; ?>

<!--maxJax公式组件-->
<?php if (@in_array('mathJax',$this->options->featuresetup)): ?>
<script src="//cdn.bootcss.com/mathjax/2.7.0/MathJax.js" type="text/javascript"></script>
<script src="//cdn.bootcss.com/mathjax/2.7.0/config/TeX-AMS-MML_SVG.js" type="text/javascript"></script>
<?php endif; ?>

<!--平滑滚动组件-->
<?php if (!empty($this->options->featuresetup) && in_array('smoothscroll', $this->options->featuresetup)): ?>
    <script src="<?php echo STATIC_PATH ?>js/features/SmoothScroll.js"></script>
<?php endif; ?>
<!--lightgallery必备组件-->
<script src="<?php echo STATIC_PATH ?>js/features/jquery.fancybox.min.js?v=<?php echo Handsome::$version.Handsome::$versionTag ?>"></script>

<!--component/comments.php 页面必需js（只有选择了原生评论的时候才会加载）-->
<?php if($this->options->commentChoice =='0'): ?>
    <script src="<?php echo STATIC_PATH ?>js/features/OwO.min.js?v=<?php echo Handsome::$version.Handsome::$versionTag
    ?>"></script>
<?php endif; ?>
<!--component/comments.php 必需js结束-->

<!--全局播放器组件-->
<?php if(@in_array('musicplayer',$this->options->featuresetup)): ?>
<script src="<?php echo STATIC_PATH ?>js/music.min.js?v=<?php echo Handsome::$version.Handsome::$versionTag
?>"></script>
<script>
    <?php

    $musicObject = new stdClass();

    if (RESOLVE_MUSIC_WAY == 0){
        $value = PLAYER_MUSIC_URL;
        //解析URL地址
        $array = Utils::parseMusicUrl($value);
        $musicObject->type = 'cloud';
        $musicObject->source = $array['id'];
        $musicObject->media = $array['media'];

    }elseif (RESOLVE_MUSIC_WAY == 1){
        //解析自定义音频地址
        $musicObject->type = 'file';
        $source = array();
        $source = '['.$this->options->customMusicContent.']';
        $source = json_decode($source);
        $musicObject->source = $source;
    }

    $autoPlay = false;
    if(count($this->options->playerSetting) >0 && in_array('autoPlay',$this->options->playerSetting)){
        $autoPlay = true;
    }


    $musicSetting = (object)array(
        'autoplay' => $autoPlay,
        'listshow' => false,
        'mode' => 'listloop',
        'music' => $musicObject
    );

    ?>
    var player = new skPlayer(<?php echo json_encode($musicSetting); ?>);
    //player.play();
</script>
<?php endif; ?>

<!--主题组件js加载结束-->
<script type="text/javascript" src="https://lolicm.com/usr/themes/handsome/assets/js/SimpleZero.js"></script>
<!--主题核心js-->
    <script src="<?php echo STATIC_PATH ?>js/function.min.js?v=<?php echo Handsome::$version.Handsome::$versionTag
    ?>"></script>
    <script src="<?php echo STATIC_PATH ?>js/core.min.js?v=<?php echo Handsome::$version.Handsome::$versionTag
?>"></script>

    <script type="text/javascript">
        <?php $this->options->customJs() ?>
    </script>

</body><!--#body end-->
</html><!--html end-->
