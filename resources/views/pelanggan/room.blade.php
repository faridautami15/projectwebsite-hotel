@extends('layouts.template-room')
@section('title') The Room @endsection

 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>The Rooms</h2>
                        <div class="bt-option">
                            <a href="/hoteldelluna/home-pelanggan">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{asset('images/room-1.jpg')}}" alt="">
                        <div class="ri-text">
                            <h4>Single Room</h4>
                            <h3>Rp 3.000.000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max 1 person</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Single Bed(1)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Sofa, TV</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--<a href="#" class="primary-btn">More Details</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{asset('images/room-2.jpg')}}" alt="">
                        <div class="ri-text">
                            <h4>Twin Room</h4>
                            <h3>Rp 6.000.000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max 2 Person</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Double Bed(2)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Sofa, TV</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--<a href="#" class="primary-btn">More Details</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{asset('images/room-4.jpg')}}" alt="">
                        <div class="ri-text">
                            <h4>Standart Room</h4>
                            <h3>Rp 7.500.000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max 2 Person</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Double Bed(1)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Sofa, TV, Dinning Room</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--<a href="#" class="primary-btn">More Details</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{asset('images/room-3.jpg')}}" alt="">
                        <div class="ri-text">
                            <h4>Triple Room</h4>
                            <h3>Rp 9.000.000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max 4 Person</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Double Bed(1), Single Bed(2)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Sofa, TV</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--<a href="#" class="primary-btn">More Details</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{asset('images/room-5.jpg')}}" alt="">
                        <div class="ri-text">
                            <h4>Superior Room</h4>
                            <h3>Rp 10.000.000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max 2 person</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Double Bed(1)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Bathup, Dinning Room, Best View</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <a href="#" class="primary-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{asset('images/room-6.jpg')}}" alt="">
                        <div class="ri-text">
                            <h4>Deluxe Room</h4>
                            <h3>Rp 15.000.000<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max 2 person</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>Double Bed(1)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Bathup, Dinning Room, Living Room, Best View</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--<a href="#" class="primary-btn">More Details</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->