package com.cre8.barcode_scanner

import android.content.Intent
import android.os.Bundle
import android.os.PersistableBundle
import android.util.Log
import androidx.appcompat.app.AppCompatActivity
import com.google.zxing.integration.android.IntentIntegrator
import com.google.zxing.integration.android.IntentResult

class Scanner : AppCompatActivity(){


    override fun onCreate(savedInstanceState: Bundle?, persistentState: PersistableBundle?) {
        super.onCreate(savedInstanceState, persistentState)

        var Scan = IntentIntegrator(this)

        Scan.setPrompt("책을 스캔하세요")
        Scan.initiateScan()


    }

    override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        super.onActivityResult(requestCode, resultCode, data)

        var result:IntentResult = IntentIntegrator.parseActivityResult(requestCode, resultCode, data)

        Log.d("test", result.contents)//바코드 값


    }
}