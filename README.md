# FiiSoft Remote Content

The abstraction for a remote content able to be fetch by an abstract reader from some url.

My advice is - do not use it unless you are enough strong mentally to immune for such bad code. 
But of course you can if you want.

#### RemoteContent

Abstraction for some content available in remote location.

#### RemoteContentReader

Abstaction for reader of RemoteContent.

-----------------------------------------------

#### GuzzleContentReader, GuzzleRemoteContent

Adapters to use Guzzle in simply way as implementations of RemoteContent and RemoteContentReader.