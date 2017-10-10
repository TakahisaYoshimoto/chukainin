<?php
    // get_userdata関数を使ってユーザ情報を取得し、変数user_dataに代入
    $user_data = get_userdata($author);
?>

<table class="user">
    <tr>
      <th>ユーザー名（名：性）</th>
      <td>
        <?php echo(types_render_usermeta("user_lastname_ja", array())); ?> <?php echo(types_render_usermeta("user_firstname_ja", array())); ?>

      </td>
    </tr>
    <tr>
      <th>都道府県</th>
      <td>
        <?php echo(types_render_usermeta("location", array())); ?>
      </td>
    </tr>
    <th>メールアドレス</th>
    <td>
      <?php echo(types_render_usermeta("user_mailadress", array())); ?>
    </td>
  </tr>
    <tr>
      <th>ユーザーID</th>
      <td>
          <?php
              echo ($user_data->ID);
          ?>

      </td>
    </tr>
</table>
