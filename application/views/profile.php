<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
<div class="columns" style="padding: 80px 20%">
    <div class="column container" style="">
        <div class="card">
            <div style="background: url(https://via.placeholder.com/1000); height: 180px; background-size: cover">
                &nbsp;
            </div>
            <div style="
                    background: url(https://avatars1.githubusercontent.com/u/24368528?s=400&v=4); 
                    height: 150px; 
                    width: 150px; 
                    border: solid 5px white;
                    border-radius: 50%;
                    background-size: cover;
                    position: absolute;
                    top: 100px;
                    left: 20px;
                ">
                &nbsp;
            </div>
            <div class="card-content" style="margin-top: 50px">
                <div class="columns">
                    <div class="column is-8">
                        <div class="title is-5"><?php echo $this->session->user->firstname.' '.$this->session->user->lastname ?></div>
                        <div class="subtitle is-6"><?php echo count($jobs) > 0 ? $jobs[0]->title : '' ?></div>
                        <div class="subtitle is-6">Bandung, Jawa Barat</div>
                    </div>
                    <div class="column">
                        <table>
                            <tr>
                                <td><i class="fas fa-briefcase"></i></td>
                                <td><?php echo count($jobs) > 0 ? $jobs[0]->company_name : '' ?></td>
                            </tr>
                            <!-- <tr>
                                <td><i class="fas fa-school"></i></td>
                                <td>Telkom University</td>
                            </tr> -->
                            <tr>
                                <td><i class="fas fa-user-friends"></i></td>
                                <td><a href="" class="has-text-link">Lihat Koneksi (10) </a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="border-top: solid 1px #ccc; padding-top: 15px">
                    Some motivational mottoome motivational mottome motivational mottome motivational mottome motivational mott
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" style="border: none; box-shadow: none">
                <p class="card-header-title">
                    Pengalaman
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                    <span class="icon" id="post-trigger">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </span>
                </a>
            </div>

            <div class="card-content" style="border-bottom: solid 1px #ccc">
                <?php
                if (count($jobs) == 0) {
                    echo "<h3 class='title is-6'>No Jobs Found</h3>";
                } else {
                    foreach ($jobs as $job) {
                        echo
                            '<div class="content">
                                <div class="columns">
                                    <div class="column is-1">
                                        <i class="fas fa-briefcase fa-2x"></i>
                                    </div>
                                    <div class="column" style="border-bottom: solid 1px #ccc">
                                        <div style="margin-bottom: 0" class="columns">
                                            <strong class="column is-11">' . $job->title . '</strong>
                                            <span>
                                                    <a href="' . base_url('profile/deleteJob/' . $job->id) . '"><i class="has-text-danger fas fa-minus"></i></a>
                                                    &nbsp;
                                                    <a onClick="triggerEdit(
                                                        \'' . $job->id . '\',
                                                        \'' . $job->company_name . '\',
                                                        \'' . $job->title . '\'
                                                    )"><i class="has-text-info fas fa-edit"></i></a>
                                            </span>
                                        </div>
                                        <div class="">' . $job->company_name . '</div>
                                    </div>
                                </div>
                            </div>';
                    }
                }
                ?>

            </div>


            <div id="edit-modal" class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <div class="modal-card-head">
                        <button class="delete" aria-label="close"></button>
                    </div>
                    <form method="POST" action="<?php echo base_url('profile/editJob') ?>">
                        <div class="modal-card-body">
                            <div class="field">
                                <input type="text" name="id" id="edit-id" value="" hidden>
                                <input name="title" id="edit-title" class="input" placeholder="Enter Your Job Title"></input>
                            </div>
                            <div class="field">
                                <input name="company" id="edit-company" class="input" placeholder="Enter Your Compnany Name"></input>
                            </div>
                        </div>
                        <div class="modal-card-foot">
                            <input type="submit" class="button is-info" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
            <script>
                function triggerEdit(id, company_name, title) {
                    $('#edit-modal').toggleClass('is-active')
                    $("#edit-modal .delete").click(() => $('#edit-modal').toggleClass('is-active'))
                    $('#edit-id').val(id)
                    $('#edit-title').val(title)
                    $('#edit-company').val(company_name)
                }
            </script>
        </div>
    </div>

    <div id="post-modal" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <div class="modal-card-head">
                <button class="delete" aria-label="close"></button>
            </div>
            <form method="POST" action="<?php echo base_url('profile/postJob') ?>">
                <div class="modal-card-body">
                    <div class="field">
                        <input name="title" class="input" placeholder="Enter Your Job Title"></input>
                    </div>
                    <div class="field">
                        <input name="company" class="input" placeholder="Enter Your Compnany Name"></input>
                    </div>
                </div>
                <div class="modal-card-foot">
                    <input type="submit" class="button is-info" value="Submit" />
                </div>
            </form>
        </div>
    </div>
    <script>
        $("#post-trigger").click(() => $('#post-modal').toggleClass('is-active'))
        $("#post-modal .delete").click(() => $('#post-modal').toggleClass('is-active'))
        $("#post-modal #modal-cancel").click(() => $('#post-modal').toggleClass('is-active'))
    </script>


    <div class="column is-3">

        <div class="card">
            <header class="card-header">
                <small class="has-text-grey-lighter" style="text-align: right; width: 95%">Ad</small>
            </header>
            <div class="card-content">
                <p class="title" id="typed2" style="height: 100px"></p>
                <p class="subtitle">- Blinfoldking</p>
            </div>

            <div class="card-content">
                <a target="_blank" href="https://github.com/blinfoldking" class="button is-link is-outlined">Follow</a>
            </div>
        </div>

        <script>
            var typed2 = new Typed('#typed2', {
                strings: [
                    "“Don't follow your dream, Follow my github”"
                ],
                typeSpeed: 100,
                backSpeed: 0,
                fadeOut: true,
                loop: true
            });
        </script>
    </div>

</div>

</body>

</html>