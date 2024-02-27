@extends('layout.mainLayout')
@section('main_content')
    <section class="alert-section top-50">

        <div id="editForm"
            style="
position: absolute;
top: 50%;
left: 50%;
margin-top: -50px;
margin-left: -50px; display: none; opacity: 0;
text-align:center; border: 1px solid #aeaeae;width:400px;background-color:#fff;z-index:10000;border-radius: 15px; filter: drop-shadow(5px 5px 5px #909090);">
            <table style="margin: 10px; width: 280px;">
                <tr>
                    <td colspan="2" style="text-align: right;">
                        <span id="close"
                            style="font-weight: 300;font-family: Arial, sans-serif; cursor: pointer;">x</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <img id="img" src="" style="width: 70px; border-radius: 35px;" />
                                </td>
                                <td style="text-align: left; padding-left: 10px;">
                                    <div id="name" style="font-size: 24px;font-weight: bold;"></div>
                                    <div id="title"></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke="#ccc"
                                d="M4 4C4 3.44772 4.44772 3 5 3H14H14.5858C14.851 3 15.1054 3.10536 15.2929 3.29289L19.7071 7.70711C19.8946 7.89464 20 8.149 20 8.41421V20C20 20.5523 19.5523 21 19 21H5C4.44772 21 4 20.5523 4 20V4Z"
                                stroke="#200E32" stroke-width="2" stroke-linecap="round" />
                            <path stroke="#ccc" d="M20 8H15V3" stroke="#200E32" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path stroke="#ccc"
                                d="M11.5 13H11V17H11.5C12.6046 17 13.5 16.1046 13.5 15C13.5 13.8954 12.6046 13 11.5 13Z"
                                stroke="#200E32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path stroke="#ccc" d="M15.5 17V13L17.5 13" stroke="#200E32" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path stroke="#ccc" d="M16 15H17" stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path stroke="#ccc"
                                d="M7 17L7 15.5M7 15.5L7 13L7.75 13C8.44036 13 9 13.5596 9 14.25V14.25C9 14.9404 8.44036 15.5 7.75 15.5H7Z"
                                stroke="#200E32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </td>
                    <td id="pdf" style="text-align: left; padding-left: 10px;">
                        <a href="#">Save as PDF</a>
                    </td>
                </tr>

            </table>
        </div>

        <div id="tree"></div>
    </section>
@endsection
