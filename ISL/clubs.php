<?php
include("extra/meta/clubs_meta.php");
include("extra/nav.php");
$query="select * from clubs";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);
 ?>
  <body>
    <table cellpadding="25px"  class="center">
              <thead>
                <th><em>POS </em></th>
                <th><em>CLUB </em></th>
                <th><em>M</em></th>
                <th><em>W-D-L </em></th>
                <th><em>GD </em></th>
                <th><em>PTS </em></th>
              </thead>

            <?php while($fetch=mysqli_fetch_object($result)){ ?>
              <tbody>
            <tr>
              <td><?php echo $fetch->POS;  ?></td>
              <td><?php echo $fetch->Club_Name;  ?></td>
              <td><?php echo $fetch->M;  ?></td>
              <td><?php echo $fetch->W_D_L;  ?></td>
              <td><?php echo $fetch->GD;  ?></td>
              <td><?php echo $fetch->PTS;  ?></td>
            </tr>
            </tbody>
          <?php } ?>

            </table>
<aside id="middle-as">
  <h1>News</h1>
        <p>  Match 89 of Hero Indian Super League (Hero ISL) 2020-21 witnessed a late own goal by Enes Sipovic condemn Chennaiyin FC to a 1-0 defeat against Jamshedpur FC at the GMC Stadium in Bambolim on Wednesday. The win keeps Jamshedpur’s chances of finishing in the top-four and qualifying for the semi-finals alive, while Chennaiyin’s semis hopes suffered a big setback.

  Speaking at the post-match press conference, Jamshedpur head coach Owen Coyle felt that his team deserved the win. “What we had to do today was to win the game and we played a lot of good football to do that against a very good team. I know how dangerous they are, but we had chances before we got the goal and I think we thoroughly deserved the three points,” he said.

  When quizzed on his side’s top-four hopes, Coyle said: “All we have done is given ourselves a chance… there are three teams that are two points ahead of us at the moment. They also have a game in hand even though they have got to win those games. If they don’t [win] then we are rightly placed and if they do then we’ll be five points behind them with three games left. So, there are still enough points available. What we have to do is keep ourselves in fight and keep it interesting because it’s not our spot to give away.”
  </p>
  </aside>
    <?php
    include("extra/footer.php");
     ?>
  </body>
</html>
