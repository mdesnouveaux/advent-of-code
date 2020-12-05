<?php


namespace Aoc\Credentials;


use Aoc\Credentials\Validator\BirthValidator;
use Aoc\Credentials\Validator\ExpirationValidator;
use Aoc\Credentials\Validator\EyeColorValidator;
use Aoc\Credentials\Validator\HairColorValidator;
use Aoc\Credentials\Validator\HeightValidator;
use Aoc\Credentials\Validator\IssueValidator;
use Aoc\Credentials\Validator\PassportIdValidator;

class PassportStrongPolicy implements PassportPolicyInterface
{
    private BirthValidator $birthValidator;
    private IssueValidator $issueValidator;
    private ExpirationValidator $expirationValidator;
    private HeightValidator $heightValidator;
    private HairColorValidator $hairColorValidator;
    private EyeColorValidator $eyeColorValidator;
    private PassportIdValidator $passportIdValidator;

    /**
     * PassportStrongPolicy constructor.
     * @param BirthValidator $birthValidator
     * @param IssueValidator $issueValidator
     * @param ExpirationValidator $expirationValidator
     * @param HeightValidator $heightValidator
     * @param HairColorValidator $hairColorValidator
     * @param EyeColorValidator $eyeColorValidator
     * @param PassportIdValidator $passportIdValidator
     */
    public function __construct(BirthValidator $birthValidator, IssueValidator $issueValidator, ExpirationValidator $expirationValidator, HeightValidator $heightValidator, HairColorValidator $hairColorValidator, EyeColorValidator $eyeColorValidator, PassportIdValidator $passportIdValidator)
    {
        $this->birthValidator = $birthValidator;
        $this->issueValidator = $issueValidator;
        $this->expirationValidator = $expirationValidator;
        $this->heightValidator = $heightValidator;
        $this->hairColorValidator = $hairColorValidator;
        $this->eyeColorValidator = $eyeColorValidator;
        $this->passportIdValidator = $passportIdValidator;
    }


    public function isValid(Passport $passport): bool
    {
        return $this->birthValidator->isValid($passport) &&
            $this->issueValidator->isValid($passport) &&
            $this->expirationValidator->isValid($passport) &&
            $this->heightValidator->isValid($passport) &&
            $this->hairColorValidator->isValid($passport) &&
            $this->eyeColorValidator->isValid($passport) &&
            $this->passportIdValidator->isValid($passport);
    }

    public function countValidPassports(array $passports): int
    {
        $numberOfValidPassport = 0;

        foreach ($passports as $passport) {
            if ($this->isValid($passport)) {
                $numberOfValidPassport++;
            }
        }

        return $numberOfValidPassport;
    }
}