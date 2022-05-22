<h1>Laravel restful api </h1>

<h6>JIka pengaturan url dibawah ini error anda bisa mengitak atik file do routes api.php</h6>
<p>Import database</p>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Url</th>
            <th>Request method</th>
            <th>Body</th>
            <th>Params</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>http://127.0.0.1:8000/api/v1/auth/login</td>
            <td>Post</td>
            <td>
                <ul>
                    <li>id_card_number (required)</li>
                    <li>password (required)</li>
                </ul>
            </td>
            <td>-</td>
            <td>No params</td>
        </tr>
        <tr>
            <td>2</td>
            <td>http://127.0.0.1:8000/api/v1/auth/logout?token</td>
            <td>Post</td>
            <td>-</td>
            <td>token users</td>
            <td>Required</td>
        </tr>
        <tr>
            <td>3</td>
            <td>http://127.0.0.1:8000/api/v1/consultations?token</td>
            <td>Post</td>
            <td>
                <ul>
                    <li>disease_history (required)</li>
                    <li>current_symptoms (required)</li>
                </ul>
            </td>
            <td>Token</td>
            <td>Required</td>
        </tr>
        <tr>
            <td>4</td>
            <td>http://127.0.0.1:8000/api/v1/consultations?token</td>
            <td>Get</td>
            <td>-</td>
            <td>Token</td>
            <td>Required</td>
        </tr>
        <tr>
            <td>5</td>
            <td>http://127.0.0.1:8000/api/v1/spot?token</td>
            <td>Get</td>
            <td>- </td>
            <td>Token</td>
            <td>Required</td>
        </tr>
        <tr>
            <td>6</td>
            <td>http://127.0.0.1:8000/api/v1/consultations?token&&?id</td>
            <td>Get</td>
            <td>-
            </td>
            <td>Token and id</td>
            <td>Required all</td>
        </tr>
        <tr>
            <td>7</td>
            <td>http://127.0.0.1:8000/api/v1/vaccinations?token</td>
            <td>Post</td>
            <td>
                <ul>
                    <li>dose (required)</li>
                    <li>spot_id (required)</li>
                    <li>date yy-mm-dd (required)</li>
                    <li>society id (required) by default generate by token params</li>
                </ul>
            </td>
            <td>Token</td>
            <td>Required</td>
        </tr> 
         <tr>
            <td>8</td>
            <td>http://127.0.0.1:8000/api/v1/vaccinations?token</td>
            <td>Get</td>
            <td>-</td>
            <td>Token</td>
            <td>Required</td>
        </tr>


    </tbody>
</table>