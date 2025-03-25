<?php
class docapi{
    private function docjson($url){
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($client);
        $results = json_decode($response);
        return $results;
    }
    
    public function xuatsv($url){
        $results = $this->docjson($url);
        echo '<table width="800" border="1">
                  <tbody>
                    <tr>
                      <th width="58"><strong>ID</strong></th>
                      <th width="180"><strong>MÃ SINH VIÊN</strong></th>
                      <th width="198"><strong>HỌ ĐỆM</strong></th>
                      <th width="149"><strong>TÊN</strong></th>
                      <th width="181"><strong>LỚP</strong></th>
                    </tr>';
        $dem = 1;
        foreach($results as $data){
            echo '<tr>
                      <td align="center">'.$dem.'</td>
                      <td align="center">'.$data->mssv.'</td>
                      <td align="left">'.$data->hodem.'</td>
                      <td align="left">'.$data->ten.'</td>
                      <td align="center">'.$data->lop.'</td>
                  </tr>';
            $dem++;
        }
        echo '</tbody>
            </table>';
    }
    
    function themxoasuajson($url)
	{
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client);
		$results = json_decode($response);
		return $results;
	}
}
?>