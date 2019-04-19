


<?php

$workouts = [
    'day-one' => 'push',
    'bench press' => 'https://i.imgur.com/VVP2kFa.gif',
    'incline dumbbell press' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/workouts/2017/04/inclinedumbbellbenchpress-1492108229.gif',
    'dumbbell overhead press' => 'https://media1.giphy.com/media/7lugb7ObGYiXe/source.gif',
    'upright row' => 'https://rossedgley.com/wp-content/uploads/2018/01/01-Standing-upright-rows.gif',
    'lying triceps extension' => 'https://thumbs.gfycat.com/FrigidShallowCottonmouth-size_restricted.gif',
    'dip' => 'http://www.healthkartclub.com/blog/wp-content/uploads/2017/02/parallel-bar-Dips.gif',
    'day-two' => 'lower body & abs',
    'goblet squat' => 'https://furthermore-cdn.equinox.com/2017/02/kupah/04.gif',
    'barbell landmine squat' => 'https://furthermore-cdn.equinox.com/Mag/2015/11/landmine/01.gif',
    'walking lunge' => 'https://i.imgur.com/ygy5ie3.gif',
    'dumbbell romanian deadlift' => 'https://media1.tenor.com/images/dab4329c6d6a8f28c6d492c9679a7033/tenor.gif?itemid=10530409',
    'kneeling cable crunch' => 'https://thumbs.gfycat.com/GrizzledInsecureBaleenwhale-size_restricted.gif',
    'hanging leg raise' => 'https://thumbs.gfycat.com/ExemplaryZanyAlbino-size_restricted.gif',
    'day-three' => 'pull',
    'weighted pullup' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/workouts/2016/03/pullup-1456956490.gif?crop=1xw:1xh;center,top&resize=480:*',
    'bentover row' => 'https://thumbs.gfycat.com/ActiveWelcomeBluebird-size_restricted.gif',
    'one-arm, elbow-in dumbbell row' => 'https://thumbs.gfycat.com/ScentedBrightDipper-size_restricted.gif',
    'face pull' => 'https://thumbs.gfycat.com/WellwornWelloffEskimodog-size_restricted.gif',
    'biceps curl' => 'https://media.giphy.com/media/puWNK2SSCh7yg/giphy.gif',
    'hammer curl' => 'https://thumbs.gfycat.com/AlarmingVeneratedFawn-small.gif',
    'shrug' => 'https://i.makeagif.com/media/8-28-2015/UANMOB.gif',
];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>3 Days A Week Workout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

    </style>
  </head>
  <body>
    <div class="container">

        <div class="row mb-2">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h3 id="top">3 Days A Week Workout</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
                <ul class="list-group text-center">
                    <a href="#day-one"><li class="list-group-item">DAY ONE</li></a>
                    <a href="#day-two"><li class="list-group-item">DAY TWO</li></a>
                    <a href="#day-three"><li class="list-group-item">DAY THREE</li></a>
                </ul>
            </div>
        </div>
        <div class="row m-3 pt-3 pb-3">
        <?php foreach ( $workouts as $name => $gif ): ?>

            <?php if ( strpos( $name, 'day' ) !== false ): ?>
                <?php $formatted_name = str_replace( ['-', '–'], ' ', $name );?>
            <div class="col-12 text-center">
                <p class="h4 text-uppercase">
                    <strong>
                        <a name="<?php echo $name; ?>"><?php echo "{$formatted_name} - {$gif}"; ?></a>
                    </strong>
                </p>
                <?php if ( $name !== 'day-one' ): ?>
                    <a href="#top">top</a>
                <?php endif;?>
            </div>
                <?php continue;?>
            <?php endif;?>
            <div class="col-12 mt-5 text-center"><p class="lead text-uppercase"><?php echo $name; ?></p></div>
            <div class="col-12 text-center"><img class="img-thumbnail rounded" src="<?php echo $gif; ?>" alt="" height="" width=""></div>

        <?php endforeach;?>
        </div>
    </div>
  </body>
</html>




