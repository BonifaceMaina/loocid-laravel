@extends('layouts.index')

@section('content')

    <div class="container  organizations">
        <div class="row">
            <div class="col-sm-2">
                <div class="links-column">
                    <a href="#">Link 1</a><br>
                    <a href="#">Link 2</a><br>
                    <a href="#">Link 3</a><br>
                    <a href="#">Link 4</a><br>
                    <a href="#">Link 5</a><br>
                </div>
            </div>


            <!--These are the organizations' tabs for content-->
            <div class="col-sm-7">
                <div class="organization-tabs">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href=".home" role="tab" data-toggle="tab">Home</a></li>
                        <li><a href=".profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li><a href=".messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li><a href=".settings" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>

                <!-- Tab panes with classes-->
                <div class="tab-content">
                    <div class="tab-pane active home">
                        <h3>About the Organization</h3>
                        <p>Semper erat a pretium ante dis consectetur praesent interdum tempus nisl hendrerit laoreet aliquet dictumst integer. Eu phasellus a suspendisse adipiscing a nam class non ullamcorper nec habitasse magna volutpat ac risus accumsan. Integer sagittis parturient lacus congue vestibulum a magnis cum a cum facilisi a habitasse nisi blandit suspendisse a consequat varius parturient facilisi. Fermentum id ad adipiscing habitant ut est ante suscipit parturient consectetur vestibulum sem primis diam fringilla aliquet ullamcorper cursus molestie.        Fames vitae senectus quam ullamcorper adipiscing.</p>
                    </div>
                    <div class="tab-pane profile">
                        <h3>Organization's Profile</h3>
                        <h4>To be hidden when the user is not logged in/ authorized</h4>
                        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                        Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                        Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.

                    </div>
                    <div class="tab-pane messages">messages</div>
                    <div class="tab-pane settings">settings</div>
                </div>
            </div>

            <div class="col-sm-3 donate-tab">
                <button class="btn btn-success">Donate</button>

            </div>
        </div>

    </div>

@endsection
