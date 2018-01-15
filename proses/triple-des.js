	    function decryptByTDES(message, key){
	    	var keyHex = CryptoJS.enc.Base64.parse(key);
	    	var decrypted = CryptoJS.TripleDES.decrypt(message, keyHex, {
	    		iv: keyHex,
	    		mode: CryptoJS.mode.CBC,
	    		padding: CryptoJS.pad.Pkcs7
	    	});
		return decrypted.toString(CryptoJS.enc.Utf8)
		}
	    function encryptByTDES(message, key){
	    	//var keyHex = CryptoJS.enc.Utf8.parse(key);
	    	var keyHex = CryptoJS.enc.Base64.parse(key);
	    	var encryptd = CryptoJS.TripleDES.encrypt(message, keyHex, {
	    		iv: keyHex,
	    		mode: CryptoJS.mode.CBC,
	    		padding: CryptoJS.pad.Pkcs7
	    	});
	    	//console.log(encrypted.ciphertext.toString());
	    	return encryptd.toString();
	    }