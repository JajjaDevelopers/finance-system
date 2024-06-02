<?= $this->extend('base/base') ?>
<?= $this->section('title') ?>
General Ledger
<?= $this->endSection() ?>
<?= $this->section('main-content') ?>
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="d-flex justify-content-between flex-wrap">
      <div class="d-flex align-items-end flex-wrap">
        <div class="me-md-3 me-xl-5">
          <h2>General Ledger</h2>
          <p class="mb-md-0">All General Ledger transactions</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin">
    <!-- <div class="col-sm-1"> -->
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-2">
            <a class="link-underline link-underline-opacity-0" href="journalEntry">
              <i class="bi bi-journals" style='font-size:80px;'></i><br>
            </a>
            Journal Entry
          </div>
          <div class="col-sm-2">
            <a class="link-underline link-underline-opacity-0" href="#" title="Make a cash payment or receipt">
              <i class="bi bi-wallet2" style='font-size:80px;'></i><br>
            </a>
            Payments & Receipts
          </div>
          <div class="col-sm-2">
            <a class="link-underline link-underline-opacity-0" href="#" title="Deposit cash at hand to the bank account">
              <i class="bi bi-bank" style='font-size:80px;'></i><br>
            </a>
            Cash Deposit
          </div>
          <div class="col-sm-2">
            <a class="link-underline link-underline-opacity-0" href="#" title="Transfer funds between bank accounts">
              <i class="bi bi-arrow-left-right" style='font-size:80px;'></i><br>
            </a>
            Bank Transfer
          </div>
          <div class="col-sm-2">
            <a class="link-underline link-underline-opacity-0" href="#" title="Make a bank reconciliation">
              <i class="bi bi-calculator" style='font-size:80px;'></i><br>
            </a>
            Bank Reconciliation
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
</div>
<?= $this->endSection() ?>