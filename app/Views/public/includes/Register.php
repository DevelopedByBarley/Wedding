<div class="container" id="resztvetel">
  <div class="row my-5" id="register">
    <div class="col-md-8 offset-md-2">
      <div class="text-center my-5">
        <h2 class="text-center mt-5 font-xl">RÉSZT VESZEL A NAGY NAPON?</h2>
        <img src="/eskuvonk/public/assets/images/Divider.png" class="divider" alt="">
      </div>

      <form action="/eskuvonk/register" method="POST">
        <?php $csfrToken->generate() ?>
        <div class="row mb-4">
          <div class="col-12 col-lg-6 mt-3 d-flex align-items-center justify-content-lg-end">
            <div class="form-outline mx-lg-5">
              <div class="form-check">
                <input class="form-check-input border border-dark rounded radio" type="radio" name="participation" value="1" required>
                <label class="form-check-label text-dark">
                  MÁR ALIG VÁROM
                </label>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 d-flex align-items-center justify-content-lg-start">
            <div class="form-outline mx-lg-5">
              <div class="form-check">
                <input class="form-check-input border border-dark rounded radio" type="radio" name="participation" value="0">
                <label class="form-check-label text-dark">
                  NEM TUDOK JÖNNI
                </label>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 px-lg-5">
            <div class="form-outline">
              <label class="form-label" for="first_name">Vezetéknév</label>
              <input type="text" name="first_name" class="form-control" required data-validators='{
                  "name": "first_name",
                  "required": true,
                  "minLength": 2,
                  "hasUppercase": true
                }' />
              <div class="bottom-border"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 px-lg-5">
            <div class="form-outline">
              <label class="form-label" for="last_name">Utónév</label>
              <input type="text" name="last_name" class="form-control" required data-validators='{
                  "name": "last_name",
                  "required": true,
                  "minLength": 2,
                  "hasUppercase": true
                }' />
              <div class="bottom-border"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 px-lg-5">
            <div class="form-outline">
              <label class="form-label" for="phone">Telefonszám</label>
              <input type="tel" name="phone" class="form-control" required data-validators='{
                  "name": "phone",
                  "required": true,
                  "phone": true
                }' />
              <div class="bottom-border"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 px-lg-5">
            <div class="form-outline">
              <label class="form-label" for="email">Email</label>
              <input type="email" name="email" class="form-control" required data-validators='{
                  "name": "email",
                  "required": true,
                  "email": true
                }' />
              <div class="bottom-border"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 px-lg-5">
            <div class="form-outline">
              <label class="form-label" for="num_of_guests">Vendégek száma</label>
              <input type="number" min="1" name="num_of_guests" class="form-control" required data-validators='{
                  "name": "num_of_guests",
                  "maxLength": 2
                }' />
              <div class="bottom-border"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-3 px-lg-5">
            <div class="form-outline">
              <label class="form-label" for="age_of_children">Gyerekek életkora</label>
              <input type="text" name="age_of_children" class="form-control" />
              <div class="bottom-border"></div>
            </div>
          </div>

        </div>

        <div class="form-outline mb-2 px-lg-5">
          <label class="form-label" for="name_of_guests">Vendégek neve</label>
          <textarea name="name_of_guests" rows="5" class="form-control" required data-validators='{
                  "name": "name_of_guests",
                  "required": true
                }'></textarea>
          <div class="bottom-border"></div>
        </div>
        <div class="form-outline mb-4 px-lg-5">
          <label class="form-label" for="spec_requests">Speciális kérések</label>
          <textarea name="spec_requests" rows="5" class="form-control"></textarea>
          <div class="bottom-border"></div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="font-sm mt-5">Kérjük, a részvételi szándékotokat legkésőbb 2024.06.30-ig jelezzétek!</p>
            <button class="btn-pr font-xs" type="submit">Küldés</button>
          </div>
        </div>
      </form>


    </div>
  </div>
</div>