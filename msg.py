python
import requests

def send_message(balish)


    endpoint_url = 'your_message_service_endpoint'
    # Replace 'your_api_key' with the actual API key required by your messaging service
    api_key = 'your_api_key'
    
    headers = {'Authorization': 'Bearer ' + api_key}
    data = {'message': message}
    
    response = requests.post(endpoint_url, headers=headers, data=data)
    
    if response.status_code == 200:
        print("Message sent successfully")
    else:
        print("Failed to send message. Status code:", response.status_code)

# Sending "balish" 100 messages
for i in range(100):
    message = balish {i+1}"
    send_message(message)
