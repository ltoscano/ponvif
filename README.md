ponvif
======

ONVIF PHP implementation

Welcome! You can find a detailed description on Squidoo page "ONVIF Programming Revealed" http://www.squidoo.com/onvif-programming-revealed

ponvif is a concrete approach to build Network Video Client (NVC) working with Network Video Transmitter devices (NVT) 
such as IP-cameras and video encoders. This solution is a simple programming exercise and has no claim to completeness.
I choose PHP as programming language because it has almost no learning curve and is very simple to translate in other 
languages. 

ONVIF seems to have a very promising future, but the programming of a compliant client is not a simple task.
It is very difficult to find examples and information to develop in a reasonable time frame. 
SOAP communication used by ONVIF is based on messages too heavy and complex and this adds further complexity. 
All this is not ideal to develop at an acceptable cost or at the experimental level. 
My goal here is to overcome these limitations and provide a solution to start development in time close to zero. 

I leave to the competence of reader any other improvement. 

*****

This software module can control network video devices with ONVIF protocol.

It can send HTTP SOAP requests to a network video device that supports the ONVIF protocol to perform several types of operations. Currently it can:

- Get the system date
- Get the system capabilities
- Get the video sources
- Get the existing profiles
- Get the available services
- Get information of the device information
- Get the URI of a stream
- Get the available presets
- Get information of a given node
- Go to a given preset
- Remove a given preset
- Set a given preset
- Perform a relative move
- Perform a relative move and zoom
- Perform an absolute move
- Start a continuous move
- Start a continuous move and zoom
- Stop a move

Version 1.1

- Added more robust soap messages handler. 
- Added more strict error management and exception throwing.
- Minor fixes to improve compatibility.
- Added setBreakOnError($flag). 
  If $flag is true (default) error checking is very strict and ponvif interrupts execution (and throws exception) if an error occurs during communication with the device.
  If $flag is false and a communication error occurs, ponvif avoids (when possible) to interrupt execution and doesn't throw exception.
- Added getLastResponse(). It returns last response received from the device.
