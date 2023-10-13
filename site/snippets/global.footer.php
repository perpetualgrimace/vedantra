<?php
  // check for optionable variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = 'u-back'; endif;
  if(isset($theme)): $theme = $theme; else: $theme = 'u-dark'; endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-center'; endif;
  $contact = $pages->find('contact');
?>

</main>

<footer class="footer <?php echo $depth . ' ' . $theme ?>" role="contentinfo">
  <div class="u-row <?php echo $alignment ?>">
    <div class="footer__contact"><p><?php echo $site->title() ?> | <a href="<?php echo $contact->gmaps_url() ?>" target="_blank"><?php echo $contact->address() ?></a></p></div>
    <div class="footer__legal"><?php echo $site->copyright()->kirbytext() ?></div>
  </div>
</footer>

<script>
  (function(d) {
    var config = {
      kitId: 'thc3upq',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<script src="<?php echo $site->url() ?>/assets/build/js/production.min.js"></script>
<link rel="stylesheet" href="<?php echo $site->url() ?>/assets/build/css/motion.css">

</body>
</html>
