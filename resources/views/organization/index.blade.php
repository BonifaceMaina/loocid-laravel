@extends('layouts.index')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="avatar-container clearfix">
                    <img src="{{asset('/images/avatar.jpg')}}" class="img-responsive">
                </div>
                {{--<p>Organization's Name</p><br>--}}
                {{--<h6>Catchy Phrase or Vision</h6>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <iframe width="745" height="315" src="https://www.youtube.com/embed/OAcXnzRNiCY" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
                <h4>Details</h4>
                <div class="basic-content-container">
                    <b>Location: </b> &nbsp;Country<br>
                    <b>Sector:</b>&nbsp; Peace Keeping<br>
                    <b>Founded:</b>&nbsp;2004<br>
                    <b>Website:</b>&nbsp;www.organization.com<br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <h3>DESCRIPTION</h3>
                <div class="basic-content-container">
                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br>

                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.<br>

                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>

                </div>
            </div>

            <div class="col-sm-4">


            </div>

        </div>

    <h3>FUNDRAISING AND FINANCIALS</h3>

    {{--this comes later in the body--}}

    <div class="organizations ">
        <div class="row">

            <!--These are the organizations' tabs for content-->
            <div class="col-sm-8">
                <div class="basic-content-container">
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

            </div>
        </div>

    </div>
 </div>


@endsection
