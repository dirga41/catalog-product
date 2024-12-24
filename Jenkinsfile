stage('Notify Discord') {
            steps {
                script {
                    def message = [
                        "content": "Pipeline berhasil",
                        "embeds": [
                            [
                                "title": "docker build dan push",
                                "description": "Image ${DOCKER_IMAGE} berhasil di push",
                                "color": 3066993
                            ]
                        ]
                    ]
                    httpRequest(
                        httpMode: 'POST',
                        acceptType: 'APPLICATION_JSON',
                        contentType: 'APPLICATION_JSON',
                        requestBody: groovy.json.JsonOutput.toJson(message),
                        url: DISCORD_WEBHOOK
                    )
                }
            }
        }
       
                   

    post {
        failure {
            script {
                def message = [
                    "content": "Pipeline gagal",
                    "embeds": [
                        [
                            "title": "Pipeline gagal",
                            "description": "Terdapat kesalahan",
                            "color": 15158332
                        ]
                    ]
                ]
                httpRequest(
                    httpMode: 'POST',
                    acceptType: 'APPLICATION_JSON',
                    contentType: 'APPLICATION_JSON',
                    requestBody: groovy.json.JsonOutput.toJson(message),
                    url: DISCORD_WEBHOOK
                )
}
