<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Bank Accounts') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-lg-8">
            <div class="card card-body">
                <h3 class="card-title font-weight-bold">{{ __('Your bank Accounts') }}</h3>
                <p>{{ __('Banking details below will be used by your referrals to purchase MRC.') }}</p>
                @forelse($bank_accounts as $account)
                    <div class="">
                        <table class="table table-striped">
                        </table>
                    </div>
                @empty
                    <p>{{ __('You have not entered any bank account in the system, please click on the add button below to add a new bank account.') }}</p>
                    <div class="my-4">
                        <a href="{{ route('bank-account.create') }}" class="btn bg-indigo text-white font-weight-bold px-3 text-capitalize">{{ __('Add bank account') }}</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>


