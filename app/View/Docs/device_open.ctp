<?php $this->set('title_for_layout', '開封情報登録API'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>API概要</h3>
                <p>開封情報を登録するためのAPI。<br />
                    基本的にはアプリ側からリクエストされる。</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                項目
                            </th>
                            <th>
                                内容
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>リクエストメソッド</th>
                            <td>POST</td>
                        </tr>
                        <tr>
                            <th>エンドポイント</th>
                            <td>/device/open</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row（API概要） -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>リクエストパラメーター</h3>
                <p>リクエストパラメーターを以下に示します。</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="2">
                                パラメーター
                            </th>
                            <th>
                                パラメーター名
                            </th>
                            <th>
                                必須
                            </th>
                            <th>
                                形式
                            </th>
                            <th>
                                説明
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="2">push_target</td>
                            <td>Push対象</td>
                            <td>◯</td>
                            <td>文字列</td>
                            <td>"ios" or "android"</td>
                        </tr>
                        <tr>
                            <td colspan="2">push_token</td>
                            <td>Pushトークン</td>
                            <td>◯</td>
                            <td>文字列</td>
                            <td>iPhoneの場合：<i>device token</i><br/>
                                Androidの場合：<i>registration id</i>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">message_id</td>
                            <td>メッセージID</td>
                            <td>-</td>
                            <td>数値</td>
                            <td>開封したメッセージID（取得可能な場合のみ）</td>
                        </tr>
                        <tr>
                            <td colspan="2">user_id</td>
                            <td>ユーザーID</td>
                            <td>-</td>
                            <td>文字列</td>
                            <td>サービスサーバー側のユニークキー（255文字以内）</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row（リクエストパラメーター） -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>レスポンス</h3>
                <p>JSON形式のレスポンスデータを以下に示します。</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="2">
                                レスポンス
                            </th>
                            <th>
                                レスポンス名
                            </th>
                            <th>
                                形式
                            </th>
                            <th>
                                説明
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="2">process_result</td>
                            <td>処理結果</td>
                            <td>数値</td>
                            <td>1：成功<br/>
                                0：失敗
                            </td>
                        </tr>
                        <?php echo $this->element( 'docs/error_response' ); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row（レスポンス） -->