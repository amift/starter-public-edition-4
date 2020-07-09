<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| SMILEYS
| -------------------------------------------------------------------
| This file contains an array of smileys for use with the emoticon helper.
| Individual images can be used to replace multiple smileys.  For example:
| :-) and :) use the same image replacement.
|
| Please see user guide for more info:
| https://codeigniter.com/userguide3/helpers/smiley_helper.html
|
*/
$smileys = array(

//  smiley                   image name             width   height  alt

    // BC

    ':-)'           => array('grin.gif',            '19',   '19',   'grin'),
    ':lol:'         => array('lol.gif',             '19',   '19',   'LOL'),
    ':cheese:'      => array('cheese.gif',          '19',   '19',   'cheese'),
    ':)'            => array('smile-old.gif',       '19',   '19',   'smile'),
    ';-)'           => array('wink-old.gif',        '19',   '19',   'wink'),
    ';)'            => array('wink-old.gif',        '19',   '19',   'wink'),
    ':smirk:'       => array('smirk-old.gif',       '19',   '19',   'smirk'),
    ':roll:'        => array('rolleyes.gif',        '19',   '19',   'rolleyes'),
    ':-S'           => array('confused.gif',        '19',   '19',   'confused'),
    ':wow:'         => array('surprise.gif',        '19',   '19',   'surprised'),
    //':bug:'         => array('bigsurprise.gif',     '19',   '19',   'big surprise'),
    ':bug:'         => array('bug.gif',             '19',   '19',   'bug'),
    ':-P'           => array('tongue_laugh.gif',    '19',   '19',   'tongue laugh'),
    '%-P'           => array('tongue_rolleye.gif',  '19',   '19',   'tongue rolleye'),
    ';-P'           => array('tongue_wink.gif',     '19',   '19',   'tongue wink'),
    ':P'            => array('raspberry.gif',       '19',   '19',   'raspberry'),
    ':blank:'       => array('blank.gif',           '19',   '19',   'blank stare'),
    ':long:'        => array('longface.gif',        '19',   '19',   'long face'),
    ':ohh:'         => array('ohh.gif',             '19',   '19',   'ohh'),
    ':grrr:'        => array('grrr.gif',            '19',   '19',   'grrr'),
    ':gulp:'        => array('gulp.gif',            '19',   '19',   'gulp'),
    '8-/'           => array('ohoh.gif',            '19',   '19',   'oh oh'),
    ':down:'        => array('downer.gif',          '19',   '19',   'downer'),
    ':red:'         => array('embarrassed.gif',     '19',   '19',   'red face'),
    ':sick:'        => array('sick.gif',            '19',   '19',   'sick'),
    ':shut:'        => array('shuteye.gif',         '19',   '19',   'shut eye'),
    ':-/'           => array('hmm.gif',             '19',   '19',   'hmmm'),
    '>:('           => array('mad.gif',             '19',   '19',   'mad'),
    ':mad:'         => array('mad.gif',             '19',   '19',   'mad'),
    '>:-('          => array('angry-old.gif',       '19',   '19',   'angry'),
    ':angry:'       => array('angry-old.gif',       '19',   '19',   'angry'),
    ':zip:'         => array('zip.gif',             '19',   '19',   'zipper'),
    ':kiss:'        => array('kiss-old.gif',        '19',   '19',   'kiss'),
    ':ahhh:'        => array('shock.gif',           '19',   '19',   'shock'),
    ':coolsmile:'   => array('shade_smile.gif',     '19',   '19',   'cool smile'),
    ':coolsmirk:'   => array('shade_smirk.gif',     '19',   '19',   'cool smirk'),
    ':coolgrin:'    => array('shade_grin.gif',      '19',   '19',   'cool grin'),
    ':coolhmm:'     => array('shade_hmm.gif',       '19',   '19',   'cool hmm'),
    ':coolmad:'     => array('shade_mad.gif',       '19',   '19',   'cool mad'),
    ':coolcheese:'  => array('shade_cheese.gif',    '19',   '19',   'cool cheese'),
    ':vampire:'     => array('vampire.gif',         '19',   '19',   'vampire'),
    ':snake:'       => array('snake.gif',           '19',   '19',   'snake'),
    ':exclaim:'     => array('exclaim.gif',         '19',   '19',   'exclaim'),
    ':question:'    => array('question.gif',        '19',   '19',   'question'),

    // https://github.com/Fantomas42/django-emoticons

    ':)'            => array('smile.gif',           '19',   '19',   'smile'),
    ':-)'           => array('smile.gif',           '19',   '19',   'smile'),
    ':=)'           => array('smile.gif',           '19',   '19',   'smile'),
    '(smile)'       => array('smile.gif',           '19',   '19',   'smile'),
    '\o/'           => array('dance.gif',           '19',   '19',   'dance'),
    '\:D/'          => array('dance.gif',           '19',   '19',   'dance'),
    '\:d/'          => array('dance.gif',           '19',   '19',   'dance'),
    '(dance)'       => array('dance.gif',           '19',   '19',   'dance'),
    ':('            => array('sadsmile.gif',        '19',   '19',   'sadsmile'),
    ':-('           => array('sadsmile.gif',        '19',   '19',   'sadsmile'),
    ':=('           => array('sadsmile.gif',        '19',   '19',   'sadsmile'),
    '(sad)'         => array('sadsmile.gif',        '19',   '19',   'sadsmile'),
    ';)'            => array('wink.gif',            '19',   '19',   'wink'),
    ';-)'           => array('wink.gif',            '19',   '19',   'wink'),
    ';=)'           => array('wink.gif',            '19',   '19',   'wink'),
    '(wink)'        => array('wink.gif',            '19',   '19',   'wink'),
    ';('            => array('crying.gif',          '19',   '19',   'crying'),
    ';-('           => array('crying.gif',          '19',   '19',   'crying'),
    ';=('           => array('crying.gif',          '19',   '19',   'crying'),
    '(cry)'         => array('crying.gif',          '19',   '19',   'crying'),
    ':*'            => array('kiss.gif',            '19',   '19',   'kiss'),
    ':-*'           => array('kiss.gif',            '19',   '19',   'kiss'),
    ':=*'           => array('kiss.gif',            '19',   '19',   'kiss'),
    '(kiss)'        => array('kiss.gif',            '19',   '19',   'kiss'),
    ':|'            => array('speechless.gif',      '19',   '19',   'speechless'),
    ':-|'           => array('speechless.gif',      '19',   '19',   'speechless'),
    ':=|'           => array('speechless.gif',      '19',   '19',   'speechless'),
    '(speechless)'  => array('speechless.gif',      '19',   '19',   'speechless'),
    ':-?'           => array('thinking.gif',        '19',   '19',   'thinking'),
    ':?'            => array('thinking.gif',        '19',   '19',   'thinking'),
    ':=?'           => array('thinking.gif',        '19',   '19',   'thinking'),
    '(think)'       => array('thinking.gif',        '19',   '19',   'thinking'),
    '|('            => array('dull.gif',            '19',   '19',   'dull'),
    '|-('           => array('dull.gif',            '19',   '19',   'dull'),
    '|=('           => array('dull.gif',            '19',   '19',   'dull'),
    '(dull)'        => array('dull.gif',            '19',   '19',   'dull'),
    '|-)'           => array('sleepy.gif',          '19',   '19',   'sleepy'),
    'I-)'           => array('sleepy.gif',          '19',   '19',   'sleepy'),
    'I=)'           => array('sleepy.gif',          '19',   '19',   'sleepy'),
    '(snooze)'      => array('sleepy.gif',          '19',   '19',   'sleepy'),
    '])'            => array('evilgrin.gif',        '19',   '19',   'evilgrin'),
    ']=)'           => array('evilgrin.gif',        '19',   '19',   'evilgrin'),
    '(grin)'        => array('evilgrin.gif',        '19',   '19',   'evilgrin'),
    ':$'            => array('blush.gif',           '19',   '19',   'blush'),
    ':-$'           => array('blush.gif',           '19',   '19',   'blush'),
    ':=$'           => array('blush.gif',           '19',   '19',   'blush'),
    '(blush)'       => array('blush.gif',           '19',   '19',   'blush'),
    ':D'            => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    ':-D'           => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    ':=D'           => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    ':d'            => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    ':-d'           => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    ':=d'           => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    '(laugh)'       => array('bigsmile.gif',        '19',   '19',   'bigsmile'),
    ':O'            => array('surprised.gif',       '19',   '19',   'surprised'),
    ':-O'           => array('surprised.gif',       '19',   '19',   'surprised'),
    ':=O'           => array('surprised.gif',       '19',   '19',   'surprised'),
    ':o'            => array('surprised.gif',       '19',   '19',   'surprised'),
    ':-o'           => array('surprised.gif',       '19',   '19',   'surprised'),
    ':=o'           => array('surprised.gif',       '19',   '19',   'surprised'),
    '(surprised)'   => array('surprised.gif',       '19',   '19',   'surprised'),
    '8)'            => array('cool.gif',            '19',   '19',   'cool'),
    '8-)'           => array('cool.gif',            '19',   '19',   'cool'),
    '8=)'           => array('cool.gif',            '19',   '19',   'cool'),
    'B)'            => array('cool.gif',            '19',   '19',   'cool'),
    'B-)'           => array('cool.gif',            '19',   '19',   'cool'),
    'B=)'           => array('cool.gif',            '19',   '19',   'cool'),
    '(cool)'        => array('cool.gif',            '19',   '19',   'cool'),
    '8-|'           => array('nerd.gif',            '19',   '19',   'nerd'),
    'B-|'           => array('nerd.gif',            '19',   '19',   'nerd'),
    '8|'            => array('nerd.gif',            '19',   '19',   'nerd'),
    'B|'            => array('nerd.gif',            '19',   '19',   'nerd'),
    '8=|'           => array('nerd.gif',            '19',   '19',   'nerd'),
    'B=|'           => array('nerd.gif',            '19',   '19',   'nerd'),
    '(nerd)'        => array('nerd.gif',            '19',   '19',   'nerd'),
    ':P'            => array('tongueout.gif',       '19',   '19',   'tongueout'),
    ':-P'           => array('tongueout.gif',       '19',   '19',   'tongueout'),
    ':=P'           => array('tongueout.gif',       '19',   '19',   'tongueout'),
    ':p'            => array('tongueout.gif',       '19',   '19',   'tongueout'),
    ':-p'           => array('tongueout.gif',       '19',   '19',   'tongueout'),
    ':=p'           => array('tongueout.gif',       '19',   '19',   'tongueout'),
    '(tongueout)'   => array('tongueout.gif',       '19',   '19',   'tongueout'),
    ':S'            => array('worried.gif',         '19',   '19',   'worried'),
    ':s'            => array('worried.gif',         '19',   '19',   'worried'),
    ':-s'           => array('worried.gif',         '19',   '19',   'worried'),
    ':-S'           => array('worried.gif',         '19',   '19',   'worried'),
    ':=s'           => array('worried.gif',         '19',   '19',   'worried'),
    ':=S'           => array('worried.gif',         '19',   '19',   'worried'),
    '(worry)'       => array('worried.gif',         '19',   '19',   'worried'),
    ':@'            => array('angry.gif',           '19',   '19',   'angry'),
    ':-@'           => array('angry.gif',           '19',   '19',   'angry'),
    ':=@'           => array('angry.gif',           '19',   '19',   'angry'),
    'x('            => array('angry.gif',           '19',   '19',   'angry'),
    'x-('           => array('angry.gif',           '19',   '19',   'angry'),
    'X('            => array('angry.gif',           '19',   '19',   'angry'),
    'X-('           => array('angry.gif',           '19',   '19',   'angry'),
    'x=('           => array('angry.gif',           '19',   '19',   'angry'),
    'X=('           => array('angry.gif',           '19',   '19',   'angry'),
    ':x'            => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':-x'           => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':X'            => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':-X'           => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':#'            => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':-#'           => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':=x'           => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':=X'           => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':=#'           => array('lipssealed.gif',      '19',   '19',   'lipssealed'),
    ':^)'           => array('wondering.gif',       '19',   '19',   'wondering'),
    '(wonder)'      => array('wondering.gif',       '19',   '19',   'wondering'),
    '(mm)'          => array('mmm.gif',             '19',   '19',   'mmm'),
    '(mmm)'         => array('mmm.gif',             '19',   '19',   'mmm'),
    '(mmmm)'        => array('mmm.gif',             '19',   '19',   'mmm'),
    '(hi)'          => array('hi.gif',              '19',   '19',   'hi'),
    '(call)'        => array('call.gif',            '19',   '19',   'call'),
    '(devil)'       => array('devil.gif',           '19',   '19',   'devil'),
    '(angel)'       => array('angel.gif',           '19',   '19',   'angel'),
    '(envy)'        => array('envy.gif',            '19',   '19',   'envy'),
    '(wait)'        => array('wait.gif',            '19',   '19',   'wait'),
    '(yawn)'        => array('yawn.gif',            '19',   '19',   'yawn'),
    '(puke)'        => array('puke.gif',            '19',   '19',   'puke'),
    '(sweat)'       => array('sweating.gif',        '19',   '19',   'sweating'),
    '(doh)'         => array('doh.gif',             '19',   '19',   'doh'),
    '(talk)'        => array('talking.gif',         '19',   '19',   'talking'),
    '(inlove)'      => array('inlove.gif',          '19',   '19',   'inlove'),
    '(party)'       => array('party.gif',           '19',   '19',   'party'),
    '(wasntme)'     => array('itwasntme.gif',       '19',   '19',   'itwasntme'),
    '(clap)'        => array('clapping.gif',        '19',   '19',   'clapping'),
    '(rofl)'        => array('rofl.gif',            '19',   '19',   'rofl'),
    '(whew)'        => array('whew.gif',            '19',   '19',   'whew'),
    '(happy)'       => array('happy.gif',           '19',   '19',   'happy'),
    '(smirk)'       => array('smirk.gif',           '19',   '19',   'smirk'),
    '(nod)'         => array('nod.gif',             '19',   '19',   'nod'),
    '(shake)'       => array('shake.gif',           '19',   '19',   'shake'),
    '(punch)'       => array('punch.gif',           '19',   '19',   'punch'),
    '(emo)'         => array('emo.gif',             '19',   '19',   'emo'),
    '(sun)'         => array('sun.gif',             '19',   '19',   'sun'),
    '(music)'       => array('music.gif',           '19',   '19',   'music'),
    '(coffee)'      => array('coffee.gif',          '19',   '19',   'coffee'),
    '(beer)'        => array('beer.gif',            '19',   '19',   'beer'),
    '(ninja)'       => array('ninja.gif',           '19',   '19',   'ninja'),
    '(bow)'         => array('bow.gif',             '19',   '19',   'bow'),
    '(mooning)'     => array('mooning.gif',         '19',   '19',   'mooning'),
    '(finger)'      => array('middlefinger.gif',    '19',   '19',   'middlefinger'),
    '(bandit)'      => array('bandit.gif',          '19',   '19',   'bandit'),
    '(drunk)'       => array('drunk.gif',           '19',   '19',   'drunk'),
    '(toivo)'       => array('toivo.gif',           '19',   '19',   'toivo'),
    '(rock)'        => array('rock.gif',            '19',   '19',   'rock'),
    '(swear)'       => array('swear.gif',           '19',   '19',   'swear'),
    '(bug)'         => array('bug.gif',             '19',   '19',   'bug'),
    '(fubar)'       => array('fubar.gif',           '19',   '19',   'fubar'),
    '(tmi)'         => array('tmi.gif',             '19',   '19',   'tmi'),
    '(handshake)'   => array('handshake.gif',       '19',   '19',   'handshake'),
    '(^)'           => array('cake.gif',            '19',   '19',   'cake'),
    '(cake)'        => array('cake.gif',            '19',   '19',   'cake'),
    '(*)'           => array('star.gif',            '19',   '19',   'star'),
    '(star)'        => array('star.gif',            '19',   '19',   'star'),
    '(hug)'         => array('bear.gif',            '19',   '19',   'bear'),
    '(bear)'        => array('bear.gif',            '19',   '19',   'bear'),
    '(makeup)'      => array('makeup.gif',          '19',   '19',   'makeup'),
    '(kate)'        => array('makeup.gif',          '19',   '19',   'makeup'),
    '(smoking)'     => array('smoke.gif',           '19',   '19',   'smoke'),
    '(smoke)'       => array('smoke.gif',           '19',   '19',   'smoke'),
    '(chuckle)'     => array('giggle.gif',          '19',   '19',   'giggle'),
    '(giggle)'      => array('giggle.gif',          '19',   '19',   'giggle'),
    '(headbang)'    => array('headbang.gif',        '19',   '19',   'headbang'),
    '(banghead)'    => array('headbang.gif',        '19',   '19',   'headbang'),
    '(pi)'          => array('pizza.gif',           '19',   '19',   'pizza'),
    '(pizza)'       => array('pizza.gif',           '19',   '19',   'pizza'),
    '(flex)'        => array('muscle.gif',          '19',   '19',   'muscle'),
    '(muscle)'      => array('muscle.gif',          '19',   '19',   'muscle'),
    '(cash)'        => array('cash.gif',            '19',   '19',   'cash'),
    '(mo)'          => array('cash.gif',            '19',   '19',   'cash'),
    '($)'           => array('cash.gif',            '19',   '19',   'cash'),
    '(d)'           => array('drink.gif',           '19',   '19',   'drink'),
    '(D)'           => array('drink.gif',           '19',   '19',   'drink'),
    '(drink)'       => array('drink.gif',           '19',   '19',   'drink'),
    '(e)'           => array('mail.gif',            '19',   '19',   'mail'),
    '(m)'           => array('mail.gif',            '19',   '19',   'mail'),
    '(mail)'        => array('mail.gif',            '19',   '19',   'mail'),
    '(mp)'          => array('phone.gif',           '19',   '19',   'phone'),
    '(ph)'          => array('phone.gif',           '19',   '19',   'phone'),
    '(phone)'       => array('phone.gif',           '19',   '19',   'phone'),
    '(poolparty)'   => array('poolparty.gif',       '19',   '19',   'poolparty'),
    '(hrv)'         => array('poolparty.gif',       '19',   '19',   'poolparty'),
    '(F)'           => array('flower.gif',          '19',   '19',   'flower'),
    '(f)'           => array('flower.gif',          '19',   '19',   'flower'),
    '(flower)'      => array('flower.gif',          '19',   '19',   'flower'),
    '(~)'           => array('movie.gif',           '19',   '19',   'movie'),
    '(film)'        => array('movie.gif',           '19',   '19',   'movie'),
    '(movie)'       => array('movie.gif',           '19',   '19',   'movie'),
    '(rain)'        => array('rain.gif',            '19',   '19',   'rain'),
    '(st)'          => array('rain.gif',            '19',   '19',   'rain'),
    '(london)'      => array('rain.gif',            '19',   '19',   'rain'),
    '(o)'           => array('time.gif',            '19',   '19',   'time'),
    '(O)'           => array('time.gif',            '19',   '19',   'time'),
    '(time)'        => array('time.gif',            '19',   '19',   'time'),
    '(clock)'       => array('time.gif',            '19',   '19',   'time'),
    '(y)'           => array('yes.gif',             '19',   '19',   'yes'),
    '(Y)'           => array('yes.gif',             '19',   '19',   'yes'),
    '(ok)'          => array('yes.gif',             '19',   '19',   'yes'),
    '(yes)'         => array('yes.gif',             '19',   '19',   'yes'),
    '(n)'           => array('no.gif',              '19',   '19',   'no'),
    '(N)'           => array('no.gif',              '19',   '19',   'no'),
    '(ko)'          => array('no.gif',              '19',   '19',   'no'),
    '(no)'          => array('no.gif',              '19',   '19',   'no'),
    '(u)'           => array('brokenheart.gif',     '19',   '19',   'brokenheart'),
    '(U)'           => array('brokenheart.gif',     '19',   '19',   'brokenheart'),
    '(brokenheart)' => array('brokenheart.gif',     '19',   '19',   'brokenheart'),
    '(h)'           => array('heart.gif',           '19',   '19',   'heart'),
    '(H)'           => array('heart.gif',           '19',   '19',   'heart'),
    '(l)'           => array('heart.gif',           '19',   '19',   'heart'),
    '(L)'           => array('heart.gif',           '19',   '19',   'heart'),
    '(heart)'       => array('heart.gif',           '19',   '19',   'heart'),
    '(love)'        => array('heart.gif',           '19',   '19',   'heart'),
);
