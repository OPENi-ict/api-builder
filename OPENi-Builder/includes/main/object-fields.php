

            <h2><?php $json_object->echoJsonField('name', true); ?> Fields</h2>
            
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Object Name</th>
                        <th>Field Type</th>
                        <th>Map to Schema.org</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($json_object->returnJsonField('fields') as $field)
                        {
                            echo '<tr>';
                            $field_json = new JsonObject($field);
                            $field_json_type = new JsonObject($field_json->returnJsonField('field_type'));
                            $field_json->echoJsonField("name", false, "</td>", "<td>");
                            $field_json_type->echoJsonField("name", false, "</td>", "<td>");
                            echo '<td>';
                            $field_json_type->echoJsonFieldURL("schema.org_map", "schema.org_map");
                            echo '</td>';
                            $field_json_type->echoJsonField("comment", false, "</td>", "<td>");
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
