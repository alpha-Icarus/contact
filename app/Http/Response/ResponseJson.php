<?php

namespace App\Http\Response;
trait ResponseJson
{
    //APP接口出现异常时返回
    public function jsonData($code,$message,$data=[])
    {
        return $this->jsonResponse($code,$message,$data);
    }
    //成功时返回
    public function jsonSuccessData($data=[])
    {
        return $this->jsonResponse(0,'Success',$data);
    }
    //返回一个JSON
    private function jsonResponse($code,$message,$data)
    {
        $content=[
            'code'=>$code,
            'msg'=>$message,
            'data'=>$data,
        ];
        return json_encode($content);
    }
}