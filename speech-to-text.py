################################################################################
# Script Name: speech-to-text.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
################################################################################
# Script Name: speech-to-text.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
################################################################################
# Script Name: speech-to-text.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
################################################################################
# Script Name: speech-to-text.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
################################################################################
# Script Name: speech-to-text.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
################################################################################
# Script Name: speech-to-text.py
# Description: Description du script.
#
# Created by: Martin Lechêne
# Date: 19/07/2023
# Version: 1.0
#
import pyttsx3
import speech_recognition as sr

def get():
    r = sr.Recognizer()
    with sr.Microphone() as source:
        print('Say Something...!')
        audio = r.listen(source)
        print('done!')

    try:
        text = r.recognize_google(audio)
        print("You Said, "+ text)
    
    except Exception as e:
        print(e)

get()
