<?php $sql = "SELECT * FROM `messages` WHERE (`outgoing_msg_id` = {$outgoing_id} AND `incoming_msg_id` = {$incoming_id})
                                                  OR (`outgoing_msg_id` = {$incoming_id} AND `incoming_msg_id` = {$outgoing_id}) ORDER BY msg_id DESC";

              $query = mysqli_query($conn, $sql);

              if (mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_assoc($query)) {
                  if ($row['outgoing_msg_id'] === $outgoing_id) : ?>
                      <!-- Chat Outgoing -->
                    <div class="chat outgoing">
                      <div class="details">
                        <span>Reciver</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  <?php else : ?>
                    <!-- Chat Incoming -->
                    <div class="chat incoming">
                      <div class="details">
                        <span>Reciver</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  <?php endif; ?>
                }
              }











              while($row = mysqli_fetch_assoc($messages)) : ?>
                <span><?php echo $row['outgoing_msg_id'] ?></span>
                <p><?php echo $row['msg'] ?></p>
            <?php endwhile; 