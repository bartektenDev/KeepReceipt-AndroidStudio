var data = '{"Month": "July","Year": 2019,"last_receipt_data": {"num": "","data_time": ""},"collectedReceipts": [{"receipt_number": "#2","favorited": "FALSE","date_time": "7/5/2019 11:33 AM","from": "BestBuy","value": "$105.16","receipt_image_url": "https://i0.wp.com/www.nutemplates.com/wp-content/uploads/bestbuy-receipt-img.jpg?w=880&ssl=1","coupon_image_url": "","coupon_code": "","coupon_expire_data": "","coupon_value": "","tracking_num": "","tracking_last_location": ""},{"receipt_number": "#1","favorited": "FALSE","date_time": "7/3/2019 09:21 AM","from": "Starbucks","value": "$4.45","receipt_image_url": "https://s3-media4.fl.yelpcdn.com/bphoto/sEm4bio5q4DTtmJJ8SqiXQ/o.jpg","coupon_image_url": "","coupon_code": "","coupon_expire_data": "","coupon_value": "","tracking_num": "","tracking_last_location": ""}]}';

	var json = JSON.parse(data);

	//json["receipt_num"]
	//json.receipt_num

  //json.date

	//json.favorited

	//json.body_data.from
	//json["body_data"].value_currency

  //json.phoneNumber[0].number
  //json.phoneNumber[1].type

  var javaJSON = json.collectedReceipts;

  //alert(javaJSON.length);

  for(var i = 0; i < javaJSON.length; i++) {
    var obj = javaJSON[i];

    document.getElementById('txt').innerHTML="HELLO";
    document.getElementById('receipts_display').innerHTML = "<tr id='item'><td class='text-center text-muted'></td><td><div class='widget-content p-0'><div class='widget-content-wrapper'><div class='widget-content-left mr-3'><div class='widget-content-left'><img width='40' class='rounded-circle' src='assets/images/amazonicon.ico' alt=''></div></div><div class='widget-content-left flex2'><div class='widget-heading' id='co_title_from'></div><div class='widget-subheading opacity-7' id='mini_desc_from'></div></div></div></div></td><td class='text-center'></td><td class='text-center'><div class='badge badge-pill badge-warning'></div></td><td class='text-center'><button type='button' id='PopoverCustomT-1' class='btn btn-primary btn-sm'>Details</button></td></tr>";
    console.log(obj.receipt_number);

  }
