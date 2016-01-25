<section class="section_main">
    <div class="main_content">
        <div id="modal-2" class="modal fade">
            <div class="modal-dialog modal-sm" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" id="box_button_close" data-dismiss="modal">&times;</i></button>
                        <h4 class="modal-title">Вход в систему</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="message-login" class="control-label">Логин</label>
                                <input type="text" class="form-control-static" id="message-login" value="Admin">
                            </div>
                            <div class="form-group">
                                <label for="message-pass" class="control-label">Пароль</label>
                                <input type="text" class="form-control-static" id="message-pass">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button">Вход</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <p>Все комментарии</p>
        <div id="fon"></div>
        <div class="container_comment">

            <div class="row">

                <div id="load"></div>
                <div class="sort"> Сортировать по: <strong><span id="s_name">Имени</span></strong> <strong><span id="s_email">Email</span></strong> <strong><span id="s_date">Дате</span></strong>  </div>
                    <div class="test1">
                    <?php if ($comments) {
                        foreach ($comments as $row) {
                            ?>
                            <div class="box_comment">
                                <li><strong><?= $row['name']; ?></strong></li>
                                <li><?= $row['email']; ?></li>
                                <li><?= $row['date']; ?></li>
                                <li class="hidden"><?= $row['id']; ?></li>
                                <p> <?= $row['message']; ?></p>
                            </div>

                        <?php
                        }
                    } ?>
                    </div>
                <div class="box_test"></div>
                <?php if ($lastMessage) { ?>
                    <div class="box_comment">
                        <div class="box_item">
                            <li><strong><?= $lastMessage['name']; ?></strong></li>
                            <li><?= $lastMessage['email']; ?></li>
                            <li><?= $lastMessage['date']; ?></li>

                        </div>

                        <p> <?= $lastMessage['message']; ?></p>
                    </div>
                <?php } ?>
                <div id="data"></div>


            </div>
        </div>
    </div>


    <div class="main_comment">
        <p> Оставьте свой комментарий </p>
    </div>
    <div class="container_comment">
        <div class="row">
            <form action="" id="main_form" name="main_form" method="POST" class="main_form" novalidate>
                <label class="form-group">
                    <span class="color_element">* </span>Ваше имя:
                    <input type="text" name="name" placeholder="Ваше имя" id="name"
                           value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
                           data-validation-required-message="Вы не ввели имя!" required/>
                    <span class="help-block text-danger"></span>

                </label>

                <label class="form-group">
                    <span class="color_element">* </span>Ваш E-mail:
                    <input type="email" name="email" placeholder="Ваш E-mail" id="email"
                           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                           data-validation-email-message="не корректно ввели E-mail"
                           data-validation-required-message="Введите E-mail!" required/>
                    <span class="help-block text-danger"></span>

                </label>

                <label class="form-group">
                    <span class="color_element">* </span>Ваше сообщение:
                    <textarea name="message" placeholder="Напишите сообщение" id="message"
                              value="<?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?>"
                              data-validation-required-message="Вы не написали текст сообщения!" required></textarea>
                    <span class="help-block text-danger"></span>

                </label>

                <input type="hidden" name="date" id="date"
                       value="<?php echo date("Y-m-d H:i:s"); ?>"/>

                <input type="submit" class="btn btn-success" name="button" id="button" value="Отправить"/>

                <!--                <button type="button" class="btn btn-success"  data-toggle="modal"  data-target="#modal-1" onclick="document.getElementById('button1').click()"> Предварительный просмотр </button>-->
                <button type="button" id="#modal" class="btn btn-primary" data-toggle="modal" data-target="#modal-1"
                        data-whatever="Предварительный просмотр">Предварительный просмотр
                </button>

            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</i></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="box_comment" id="box_comment">
                        <div class="comment_li">
                            <li class="comment_name" style="font-size: 20px; font-weight: 600;"></li>
                            <li class="comment_email"></li>
                            <li class="comment_date"></li>

                        </div>
                        <div class="comment_message"></div>
                    </div>


                    <div id="data1"></div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

</section>