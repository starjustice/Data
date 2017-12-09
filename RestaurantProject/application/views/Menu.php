<div class="menubox" id="menubox">
  <div class="row">
    <div class="col l3">
      <div class="boxset">
        <div class="typebar">
          <div class="btn-group2">
            <button class="button-type">PAKET</button>
            <button class="button-type">SATUAN</button>
            <button class="button-type">MINUMAN</button>
          </div>
        </div>
        <div class="donebox">
          <div class="done">
            <button class="waves-effect waves-light btn-large pulse"><i class="material-icons right">done_all</i>button</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col l9 offset-m2">
      <div class="tipemenubox">

      </div>
        <div class="showmenu">
          <div class="row">
            <?php for($i=0;$i<7;$i++){?>
              <div class="col l4 ">
                <div class="menu" id="menu">
                    <div class="card">
                      <div class="card-image">
                        <img src="<?php echo base_url('asset/image/picture-1499145841.JPG') ?>">
                        <span class="card-title">Card Title</span>
                      </div>
                      <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>

                      </div>
                      <div class="card-action">
                        <div class="actionatt">
                          <button class="minus"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
                          <h10>1</h10>
                          <button class="add"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }?>
          </div>
        </div>
    </div>

  </div>
</div>
</div>
