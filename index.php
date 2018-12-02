<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1671">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p1"><span class="Apple-converted-space">        </span>//Enter your code here, enjoy!</p>
<p class="p2"><br></p>
<p class="p1">function hello($s) {</p>
<p class="p1"><span class="Apple-converted-space">    </span>if ($s &lt; 2) { return null;}</p>
<p class="p1"><span class="Apple-converted-space">    </span>$array = [];</p>
<p class="p1"><span class="Apple-converted-space">    </span>$array[10] = floor($s/10);</p>
<p class="p1"><span class="Apple-converted-space">    </span>$mod10 = $s % 10;</p>
<p class="p1"><span class="Apple-converted-space">    </span>if ($s &gt; 10 &amp;&amp; ($mod10 === 1 || $mod10 === 3)) {</p>
<p class="p1"><span class="Apple-converted-space">        </span>$array[10]--;</p>
<p class="p1"><span class="Apple-converted-space">    </span>}</p>
<p class="p1"><span class="Apple-converted-space">    </span>$s -= $array[10]*10;</p>
<p class="p1"><span class="Apple-converted-space">    </span>$array[5] = floor($s/5);</p>
<p class="p1"><span class="Apple-converted-space">    </span>$mod5 = $s % 5;</p>
<p class="p1"><span class="Apple-converted-space">    </span>if (($s &gt; 5 &amp;&amp; $s != 7 &amp;&amp; $s != 9)<span class="Apple-converted-space">  </span>&amp;&amp; ( $mod5 &lt; 5 || $mod5 === 6 || $mod5 === 8 )) {</p>
<p class="p1"><span class="Apple-converted-space">        </span>$array[5]--;</p>
<p class="p1"><span class="Apple-converted-space">    </span>}</p>
<p class="p1"><span class="Apple-converted-space">    </span>$s -= $array[5]*5;</p>
<p class="p1"><span class="Apple-converted-space">    </span>if ($s % 2 === 1 ) {</p>
<p class="p1"><span class="Apple-converted-space">        </span>return null;</p>
<p class="p1"><span class="Apple-converted-space">    </span>}</p>
<p class="p1"><span class="Apple-converted-space">    </span>$array[2] = floor($s/2);</p>
<p class="p1"><span class="Apple-converted-space">    </span>return $array;</p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">var_dump(hello(22));</p>
</body>
</html>
