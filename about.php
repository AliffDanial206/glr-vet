<div class="col-12">
    <div class="row my-5 ">
        <div class="col-md-5">
            <center>
            <div class="card card-outline card-purple rounded-0 shadow">
                <div class="card-header">
                    <h4 class="card-title">Contact</h4>
                </div>
                <div class="card-body rounded-0">
                    <dl>
                        <center>
                        <dt class="text-muted"></i> Email :</dt>
                        <dd class="pl-4"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted"></i> Contact Number :</dt>
                        <dd class="pl-4"><?= $_settings->info('contact') ?></dd>
                        <dt class="text-muted"></i> Location :</dt>
                        <dd class="pl-4"><?= $_settings->info('address') ?></dd>
                        <dt class="text-muted"></i> Working Hours :</dt>
                        <dd class="pl-4"><?= $_settings->info('clinic_schedule') ?></dd>
                        <dt class="text-muted"></i> Limitation of Daily Appointments :</dt>
                        <dd class="pl-4"><?= $_settings->info('max_appointment') ?></dd>
</center>
                    </dl>
                </div>
            </div>
</center>
        </div>
        <div class="col-md-7">
            <div class="card rounded-0 card-outline card-purple shadow" >
                <div class="card-body rounded-0">
                    <h2 class="text-center">About</h2>
                    <center><hr class="bg-purple border-purple w-25 border-2"></center>
                    <div>
                        <?= file_get_contents("about_us.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>