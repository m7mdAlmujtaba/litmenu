<div>
    <main class="main-content">
        <div class="container-fluid py-4">
            {{-- Tables --}}
            <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-0">
                      <h1>
                        {{__('Orders')}}
                      </h1>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            
                            
                        @endif
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                {{__('Restaurant Name')}}
                              </th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                {{__('Delivery')}}
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                {{__('Status')}}
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                {{__('Date')}}
                              </th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($orders as $order)
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="{{$order->restaurant->logo}}" class="avatar avatar-sm me-3">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">
                                        {{$order->restaurant->name_ar}}
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        {{$order->order_price}} {{__('YR')}}
                                    </p>
                                  </div>
                                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#detailsModal{{$order->id}}" 
                                        wire:click="set_order_id({{$order->id}})"
                                     
                                    >{{__('Details')}}</a>

                                    <! -- Modal to assign delivery user -->
                                    <div wire:ignore class="modal fade" id="detailsModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Assign</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                           <table>
                                                <tr>
                                                    <td>
                                                        {{__('Restaurant Name')}}
                                                    </td>
                                                    <td>
                                                        {{$order->restaurant->name_ar}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Restaurant Address')}}
                                                    </td>
                                                    <td>
                                                        {{$order->restaurant->address_ar}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Restaurant Phone')}}
                                                    </td>
                                                    <td>
                                                        {{$order->restaurant->phone}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Restaurant Logo')}}
                                                    </td>
                                                    <td>
                                                        <img src="{{$order->restaurant->logo}}" class="avatar avatar-sm me-3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Order Status')}}
                                                    </td>
                                                    <td>
                                                        {{$order->status}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Order Time')}}
                                                    </td>
                                                    <td>
                                                        {{$order->created_at->diffForHumans()}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Order Details')}}
                                                    </td>
                                                    <td>
                                                      @php 

                                                        $order_content = json_decode($order->order_content,true);
                                                      @endphp
                                                        <table>
                                                          <tr>
                                                            <th>
                                                              {{__('Name')}}
                                                            </th>
                                                            <th>
                                                              {{__('Price')}}
                                                            </th>
                                                            <th>
                                                              {{__('Quantity')}}
                                                            </th>
                                                          <th>
                                                            {{__('Total')}}
                                                          </th>
                                                          

                                                          </tr>
                                                          @foreach ($order_content as $item)
                                                            <tr>
                                                              <td>
                                                                {{$item['name_ar']}}
                                                              </td>
                                                              <td>
                                                                {{$item['price']}}
                                                              </td>
                                                              <td>
                                                                {{$item['quantity']}}
                                                              </td>
                                                              <td>
                                                                {{$item['total']}}
                                                              </td>
                                                            </tr>
                                                          @endforeach
                                                        </table>                                                       
                                                       
                                                       
                                                    </td>
                                                </tr>



                                              
                                                <tr>
                                                    <td>
                                                        {{__('Delivery Price')}}
                                                    </td>
                                                    <td>
                                                        {{$order->delivery_price}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Order Price')}}
                                                    </td>
                                                    <td>
                                                        {{$order->order_price}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('Total Price')}}
                                                    </td>
                                                    <td>
                                                        {{$order->total}}
                                                    </td>
                                                </tr>

                                            </table>
                                            
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('Close')}}
                                            </button>
                                          
                                          </div>
                                        </div>
                                      </div>
                                    </div>







                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">
                                    @if ($order->delivery_user == null)
                                        {{__('No Delivery User')}}
                                        
                                    @else
                                        {{$order->delivery_user->name}}

                                    @endif
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#assignModal{{$order->id}}"
                                        wire:click="set_order_id({{$order->id}})"
                                     
                                    >{{__('Assign')}}</a>

                                    <! -- Modal to assign delivery user -->
                                    <div wire:ignore class="modal fade" id="assignModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Assign</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">{{__('Delivery')}} :</label>
                                               <select name="delivery_user_id" wire:model="delivery_user_id" class="form-control">
                                                   <option value="">{{__('Select Delivery User')}}</option>
                                                   @foreach ($delivery_users as $delivery_user)
                                                       <option value="{{$delivery_user->id}}">{{$delivery_user->name}}</option>
                                                   @endforeach
                                                </select>
                                                
                                              </div>
                                            
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('Close')}}
                                            </button>
                                            <button type="button" wire:click="set_delivery_user_id()" class="btn btn-primary">
                                                {{__('Save')}}
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>





                                </p>
                                <p class="text-xs text-secondary mb-0">
                                    {{$order->delivery_price}} {{__('YR') }}
                                </p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                @if ($order->order_status == 'pending')
                                    <span class="badge badge-sm bg-gradient-warning">{{__('Pending')}}</span>
                                    
                                @elseif ($order->order_status == 'accepted')
                                    <span class="badge badge-sm bg-gradient-success">{{__('Accepted')}}</span>
                                @elseif ($order->order_status == 'rejected')
                                    <span class="badge badge-sm bg-gradient-danger">{{__('Rejected')}}</span>
                                @elseif ($order->order_status == 'delivered')
                                    <span class="badge badge-sm bg-gradient-info">{{__('Delivered')}}</span>
                                @elseif ($order->order_status == 'canceled')
                                    <span class="badge badge-sm bg-gradient-danger">{{__('Canceled')}}</span>
                                @elseif ($order->order_status == 'received')
                                    <span class="badge badge-sm bg-gradient-info">{{__('Received')}}</span>
                                @elseif ($order->order_status == 'on_way')
                                    <span class="badge badge-sm bg-gradient-info">{{__('On Way')}}</span>
                                @elseif ($order->order_status == 'preparing')
                                    <span class="badge badge-sm bg-gradient-info">{{__('Preparing')}}</span>
                                @elseif ($order->order_status == 'ready')
                                    <span class="badge badge-sm bg-gradient-info">{{__('Ready')}}</span>


                                @else 
                                    <span class="badge badge-sm bg-gradient-success">Online</span>

                                @endif
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">
                                    {{$order->created_at->diffForHumans()}}
                                </span>
                              </td>
                              <td class="align-middle">
                               <!--dropdown action menue -->
                               <div class="dropdown show">
                                <a class="btn btn-secondary btn-sm  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{__('Action')}}
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'pending')">
                                    {{__('Pending')}}
                                  </a>
                                  <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'accepted')">
                                    {{__('Accept')}}
                                  </a>
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'rejected')">
                                        {{__('Reject')}}
                                    </a>
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'canceled')">
                                        {{__('Cancel')}}

                                    </a>
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'preparing')">
                                            {{__('Preparing')}}
                                        </a>
                                        <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'ready')">
                                            {{__('Ready')}}
                                        </a>
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'on_way')">
                                        {{__('On Way')}}
                                    </a>
                                  
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'delivered')">
                                        {{__('Delivered')}}
                                    </a>
                                    <a class="dropdown-item" href="javascript:;" wire:click="setState({{$order->id}},'received')">
                                        {{__('Received')}}
                                    </a>




                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </div> 



                              </td>
                            </tr>
                            @endforeach
                           
                          </tbody>
                        </table>
                        <div> 
                            {{ $orders->links() }}
                          </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!--
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-0">
                      <h6>Projects table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div>
                                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">
                                  </div>
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Spotify</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-sm font-weight-bold mb-0">$2,500</p>
                              </td>
                              <td>
                                <span class="text-xs font-weight-bold">working</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">60%</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <button class="btn btn-link text-secondary mb-0">
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div>
                                    <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2">
                                  </div>
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Invision</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-sm font-weight-bold mb-0">$5,000</p>
                              </td>
                              <td>
                                <span class="text-xs font-weight-bold">done</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">100%</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div>
                                    <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2">
                                  </div>
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Jira</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-sm font-weight-bold mb-0">$3,400</p>
                              </td>
                              <td>
                                <span class="text-xs font-weight-bold">canceled</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">30%</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div>
                                    <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2">
                                  </div>
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Slack</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-sm font-weight-bold mb-0">$1,000</p>
                              </td>
                              <td>
                                <span class="text-xs font-weight-bold">canceled</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">0%</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div>
                                    <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2">
                                  </div>
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Webdev</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-sm font-weight-bold mb-0">$14,000</p>
                              </td>
                              <td>
                                <span class="text-xs font-weight-bold">working</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">80%</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div>
                                    <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2">
                                  </div>
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Adobe XD</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-sm font-weight-bold mb-0">$2,300</p>
                              </td>
                              <td>
                                <span class="text-xs font-weight-bold">done</span>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">100%</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-v text-xs"></i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
         </div>
    </main>
    
</div>

