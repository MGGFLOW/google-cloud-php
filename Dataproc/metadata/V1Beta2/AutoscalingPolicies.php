<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/autoscaling_policies.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1Beta2;

class AutoscalingPolicies
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Jobs::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa7190a38676f6f676c652f636c6f75642f6461746170726f632f763162" .
            "657461322f6175746f7363616c696e675f706f6c69636965732e70726f74" .
            "6f121d676f6f676c652e636c6f75642e6461746170726f632e7631626574" .
            "61321a2c676f6f676c652f636c6f75642f6461746170726f632f76316265" .
            "7461322f636c7573746572732e70726f746f1a28676f6f676c652f636c6f" .
            "75642f6461746170726f632f763162657461322f6a6f62732e70726f746f" .
            "1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e" .
            "732e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174" .
            "696f6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d70" .
            "74792e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d65" .
            "7374616d702e70726f746f22d1020a114175746f7363616c696e67506f6c" .
            "696379120a0a026964180120012809120c0a046e616d6518022001280912" .
            "530a0f62617369635f616c676f726974686d18032001280b32382e676f6f" .
            "676c652e636c6f75642e6461746170726f632e763162657461322e426173" .
            "69634175746f7363616c696e67416c676f726974686d4800125a0a0d776f" .
            "726b65725f636f6e66696718042001280b32432e676f6f676c652e636c6f" .
            "75642e6461746170726f632e763162657461322e496e7374616e63654772" .
            "6f75704175746f7363616c696e67506f6c696379436f6e66696712640a17" .
            "7365636f6e646172795f776f726b65725f636f6e66696718052001280b32" .
            "432e676f6f676c652e636c6f75642e6461746170726f632e763162657461" .
            "322e496e7374616e636547726f75704175746f7363616c696e67506f6c69" .
            "6379436f6e666967420b0a09616c676f726974686d229f010a1942617369" .
            "634175746f7363616c696e67416c676f726974686d124e0a0b7961726e5f" .
            "636f6e66696718012001280b32392e676f6f676c652e636c6f75642e6461" .
            "746170726f632e763162657461322e42617369635961726e4175746f7363" .
            "616c696e67436f6e66696712320a0f636f6f6c646f776e5f706572696f64" .
            "18022001280b32192e676f6f676c652e70726f746f6275662e4475726174" .
            "696f6e22e0010a1a42617369635961726e4175746f7363616c696e67436f" .
            "6e66696712400a1d677261636566756c5f6465636f6d6d697373696f6e5f" .
            "74696d656f757418052001280b32192e676f6f676c652e70726f746f6275" .
            "662e4475726174696f6e12170a0f7363616c655f75705f666163746f7218" .
            "012001280112190a117363616c655f646f776e5f666163746f7218022001" .
            "280112240a1c7363616c655f75705f6d696e5f776f726b65725f66726163" .
            "74696f6e18032001280112260a1e7363616c655f646f776e5f6d696e5f77" .
            "6f726b65725f6672616374696f6e18042001280122640a24496e7374616e" .
            "636547726f75704175746f7363616c696e67506f6c696379436f6e666967" .
            "12150a0d6d696e5f696e7374616e63657318012001280512150a0d6d6178" .
            "5f696e7374616e636573180220012805120e0a0677656967687418032001" .
            "280522720a1e4372656174654175746f7363616c696e67506f6c69637952" .
            "657175657374120e0a06706172656e7418012001280912400a06706f6c69" .
            "637918022001280b32302e676f6f676c652e636c6f75642e646174617072" .
            "6f632e763162657461322e4175746f7363616c696e67506f6c696379222b" .
            "0a1b4765744175746f7363616c696e67506f6c6963795265717565737412" .
            "0c0a046e616d6518012001280922620a1e5570646174654175746f736361" .
            "6c696e67506f6c6963795265717565737412400a06706f6c696379180120" .
            "01280b32302e676f6f676c652e636c6f75642e6461746170726f632e7631" .
            "62657461322e4175746f7363616c696e67506f6c696379222e0a1e44656c" .
            "6574654175746f7363616c696e67506f6c69637952657175657374120c0a" .
            "046e616d6518012001280922570a1e4c6973744175746f7363616c696e67" .
            "506f6c696369657352657175657374120e0a06706172656e741801200128" .
            "0912110a09706167655f73697a6518022001280512120a0a706167655f74" .
            "6f6b656e180320012809227e0a1f4c6973744175746f7363616c696e6750" .
            "6f6c6963696573526573706f6e736512420a08706f6c6963696573180120" .
            "03280b32302e676f6f676c652e636c6f75642e6461746170726f632e7631" .
            "62657461322e4175746f7363616c696e67506f6c69637912170a0f6e6578" .
            "745f706167655f746f6b656e18022001280932920b0a184175746f736361" .
            "6c696e67506f6c6963795365727669636512a0020a174372656174654175" .
            "746f7363616c696e67506f6c696379123d2e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e763162657461322e4372656174654175746f7363" .
            "616c696e67506f6c696379526571756573741a302e676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461322e4175746f7363616c69" .
            "6e67506f6c69637922930182d3e493028c01223c2f763162657461322f7b" .
            "706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d" .
            "2f6175746f7363616c696e67506f6c69636965733a06706f6c6963795a44" .
            "223a2f763162657461322f7b706172656e743d70726f6a656374732f2a2f" .
            "726567696f6e732f2a7d2f6175746f7363616c696e67506f6c6963696573" .
            "3a06706f6c69637912ae020a175570646174654175746f7363616c696e67" .
            "506f6c696379123d2e676f6f676c652e636c6f75642e6461746170726f63" .
            "2e763162657461322e5570646174654175746f7363616c696e67506f6c69" .
            "6379526571756573741a302e676f6f676c652e636c6f75642e6461746170" .
            "726f632e763162657461322e4175746f7363616c696e67506f6c69637922" .
            "a10182d3e493029a011a432f763162657461322f7b706f6c6963792e6e61" .
            "6d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6175746f" .
            "7363616c696e67506f6c69636965732f2a7d3a06706f6c6963795a4b1a41" .
            "2f763162657461322f7b706f6c6963792e6e616d653d70726f6a65637473" .
            "2f2a2f726567696f6e732f2a2f6175746f7363616c696e67506f6c696369" .
            "65732f2a7d3a06706f6c6963791289020a144765744175746f7363616c69" .
            "6e67506f6c696379123a2e676f6f676c652e636c6f75642e646174617072" .
            "6f632e763162657461322e4765744175746f7363616c696e67506f6c6963" .
            "79526571756573741a302e676f6f676c652e636c6f75642e646174617072" .
            "6f632e763162657461322e4175746f7363616c696e67506f6c6963792282" .
            "0182d3e493027c123c2f763162657461322f7b6e616d653d70726f6a6563" .
            "74732f2a2f6c6f636174696f6e732f2a2f6175746f7363616c696e67506f" .
            "6c69636965732f2a7d5a3c123a2f763162657461322f7b6e616d653d7072" .
            "6f6a656374732f2a2f726567696f6e732f2a2f6175746f7363616c696e67" .
            "506f6c69636965732f2a7d129d020a174c6973744175746f7363616c696e" .
            "67506f6c6963696573123d2e676f6f676c652e636c6f75642e6461746170" .
            "726f632e763162657461322e4c6973744175746f7363616c696e67506f6c" .
            "6963696573526571756573741a3e2e676f6f676c652e636c6f75642e6461" .
            "746170726f632e763162657461322e4c6973744175746f7363616c696e67" .
            "506f6c6963696573526573706f6e736522820182d3e493027c123c2f7631" .
            "62657461322f7b706172656e743d70726f6a656374732f2a2f6c6f636174" .
            "696f6e732f2a7d2f6175746f7363616c696e67506f6c69636965735a3c12" .
            "3a2f763162657461322f7b706172656e743d70726f6a656374732f2a2f72" .
            "6567696f6e732f2a7d2f6175746f7363616c696e67506f6c696369657312" .
            "f5010a1744656c6574654175746f7363616c696e67506f6c696379123d2e" .
            "676f6f676c652e636c6f75642e6461746170726f632e763162657461322e" .
            "44656c6574654175746f7363616c696e67506f6c69637952657175657374" .
            "1a162e676f6f676c652e70726f746f6275662e456d70747922820182d3e4" .
            "93027c2a3c2f763162657461322f7b6e616d653d70726f6a656374732f2a" .
            "2f6c6f636174696f6e732f2a2f6175746f7363616c696e67506f6c696369" .
            "65732f2a7d5a3c2a3a2f763162657461322f7b6e616d653d70726f6a6563" .
            "74732f2a2f726567696f6e732f2a2f6175746f7363616c696e67506f6c69" .
            "636965732f2a7d4286010a21636f6d2e676f6f676c652e636c6f75642e64" .
            "61746170726f632e7631626574613242184175746f7363616c696e67506f" .
            "6c696369657350726f746f50015a45676f6f676c652e676f6c616e672e6f" .
            "72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f64" .
            "61746170726f632f763162657461323b6461746170726f63620670726f74" .
            "6f33"
        ), true);

        static::$is_initialized = true;
    }
}
